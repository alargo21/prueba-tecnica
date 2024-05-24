<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function getPokemons(Request $request)
    {
        $limit = 50; // Número de resultados por página
        $page = $request->query('page', 1); // Obtener el número de página de la query string, por defecto es 1
        $offset = ($page - 1) * $limit; // Calcular el offset

        $client = new Client();
        // Hacer la solicitud a la PokeAPI con el límite y el offset calculados
        $response = $client->get("https://pokeapi.co/api/v2/pokemon?limit=$limit&offset=$offset");
        $pokemons = json_decode($response->getBody(), true);

        $results = [];

        // Procesar cada resultado de Pokémon para obtener detalles adicionales
        foreach ($pokemons['results'] as $pokemon) {
            $pokemonData = json_decode($client->get($pokemon['url'])->getBody(), true);
            $results[] = [
                'id' => $pokemonData['id'],
                'name' => $pokemonData['name'],
                'types' => array_map(fn($type) => $type['type']['name'], $pokemonData['types']),
                'image' => $pokemonData['sprites']['front_default'],
                'stats' => array_reduce($pokemonData['stats'], function ($finalStat, $stat) {
                    $finalStat[$stat['stat']['name']] = $stat['base_stat'];
                    return $finalStat;
                }, [])
            ];
        }

        // Devolver la respuesta en formato JSON
        return response()->json([
            'current_page' => $page,
            'data' => $results,
            'total' => $pokemons['count'],
            'per_page' => $limit,
            'last_page' => ceil($pokemons['count'] / $limit),
        ]);
    }
}
