@extends('adminlte::page')

@section('content_header')
    <h1>Estadistica - Beneficiarios por Ciudades</h1>
@stop

@section('content')
    <canvas id="myChart" width="400" height="400"></canvas>
@endsection

@section('js')

    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.7.0/dist/chart.min.js"></script>

    <script>
        var data = ('<?php echo ($data) ?>');
        data = JSON.parse(data);

        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: data.map( function(city){
                    return city.name;
                }),
                datasets: [{
                    axis: 'y',
                    label: '# de Beneficiarios',
                    data: data.map( function(city){
                        return city.beneficiaries_count;
                    }),
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 1)',
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 206, 86, 1)'
                    ],
                    borderWidth: 1
                }],
            },
            options: {
                indexAxis : 'y',
                scales: {
                    x: {
                        beginAtZero: true,
                        ticks: {
                            // forces step size to be 50 units
                            stepSize: 1
                        }
                    },
                },
                responsive:true,
                maintainAspectRatio:false
            }
        });
    </script>
@endsection