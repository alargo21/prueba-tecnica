<!DOCTYPE html>
<html lang="en">
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
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
    </div>

    <!-- Tabla con 5 columnas y varios registros -->
    @include('layouts.table')

    <!-- Más texto / cuerpo de la noticia -->
    <div class="container mt-4">
        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
    </div>

    <!-- Gráfico -->
    <div class="container mt-4">
        <canvas id="myChart"></canvas>
    </div>

    <script src="{{ mix('js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Datos de ejemplo para el gráfico
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023'],
                datasets: [
                    {
                        label: 'Juan Pérez',
                        data: [12, 19, 3, 5, 2, 3, 9, 7, 5, 6],
                        borderColor: 'rgba(75, 192, 192, 1)',
                        fill: false
                    },
                    {
                        label: 'Carlos Gómez',
                        data: [7, 11, 5, 8, 3, 7, 4, 6, 2, 3],
                        borderColor: 'rgba(153, 102, 255, 1)',
                        fill: false
                    }
                ]
            },
            options: {
                responsive: true,
                scales: {
                    x: {
                        beginAtZero: true
                    },
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>
