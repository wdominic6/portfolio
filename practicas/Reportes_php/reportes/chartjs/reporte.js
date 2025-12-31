var xValues = [
    'Carlos Mamani',
    'Jose Sanchez',
    'Marcos Flores',
    'Marta Quispe',
    'Miguel Choque'
];
var yValues = [55, 49, 44, 24, 15];
var barColors = ['red', 'green', 'blue', 'orange', 'brown'];

new Chart('myChart', {
    type: 'bar',
    data: {
        labels: xValues,
        datasets: [{
            backgroundColor: barColors,
            data: yValues
        }]
    },
    options: {
        legend: { display: false },
        title: {
            display: true,
            text: 'Reporte estadistico'
        }
    }
});
