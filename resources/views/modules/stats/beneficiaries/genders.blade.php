@extends('adminlte::page')

@section('content_header')
    <h1>Estadistica - Beneficiarios por Género</h1>
@stop

@section('content')
    <canvas id="myChart" width="400" height="400"></canvas>
@endsection

@section('js')

    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0/dist/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2"></script>

    <script>
        var data = ('<?php echo ($data) ?>');
        data = JSON.parse(data);

        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            plugins: [ChartDataLabels],
            type: 'pie',
            data: {
                labels: data.map( function(gender){
                    return gender.name;
                }),
                datasets: [{
                    label: 'Género',
                    data: data.map( function(gender){
                        return gender.percentage;
                    }),
                    backgroundColor: [
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(255, 206, 86, 1)'
                    ],
                    borderWidth: 1
                }],
            },
            options: {
                responsive:true,
                maintainAspectRatio:false,
                plugins:{
                    datalabels : {
                        anchor : "center",
                        formatter : (dato) => dato + "%",
                        color: "white",
                        font: {
                        family: '"Times New Roman", Times, serif',
                        size: "28",
                        weight: "bold",
                        
                        },
                        listeners: {
                            click: function(context) {
                                // Receives `click` events only for labels of the first dataset.
                                // The clicked label index is available in `context.dataIndex`.
                                // console.log('label ' + context.dataIndex + ' has been clicked!');
                                console.log("prueba");
                            }
                        }
                    },
                    tooltip : {
                        mode : 'nearest'
                    }
                }
            }
        });
    </script>
@endsection