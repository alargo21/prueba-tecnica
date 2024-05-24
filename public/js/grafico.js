// Datos de ejemplo para el gráfico
var chart = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(chart, {
        type: 'line', // Tipo de gráfico: línea
        data: {
            // Etiquetas para el eje x (años)
            labels: ['2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021', '2022', '2023'],
            // Conjuntos de datos que se mostrarán en el gráfico
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