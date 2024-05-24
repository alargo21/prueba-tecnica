<!DOCTYPE html>
<html lang="en">
    <!--  Separo parte del codigo y lo llevo a otros archivos para poder hacer el codigo mas escalable y reutilizable en otras vistas de ser necesario -->
    @include('layouts.head')

<body>
    <!-- Menú de cabecera -->
    @include('layouts.menu')

    <!-- Imagen principal de la noticia -->
    <div class="container mt-4 text-center">
        <img src="{{ asset('image/player.jpg') }}" class="img-fluid" alt="Imagen principal">
    </div>

    <!-- Titular -->
    <div class="container mt-4">
        <h1 class="display-4">Lorem Ipsum</h1>
    </div>

    <!-- Texto / cuerpo de la noticia -->
    <div class="container mt-4">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, 
        when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the 
        leap into electronic typesetting, remaining essentially unchanged.</p>
    </div>

    <!-- Tabla con 5 columnas y varios registros -->
    @include('layouts.table')

    <!-- Más texto / cuerpo de la noticia -->
    <div class="container mt-4">
        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. 
        The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, 
        content here', making it look like readable English.</p>
    </div>

    <!-- Gráfico -->
    <div class="container mt-4">
        <canvas id="myChart"></canvas>
    </div>

    <!-- Incluir Chart.js y el archivo grafica.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('js/grafico.js') }}"></script>
</body>
</html>
