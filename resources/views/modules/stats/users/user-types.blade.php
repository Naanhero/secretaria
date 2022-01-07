@extends('adminlte::page')

@section('content_header')
    <h1>Estadistica - Tipos de Usuario</h1>
@stop
 
@section('content')
    <div id="container" style="width:100%; height:400px;"></div>
@endsection

@section('js')
    <script src="https://code.highcharts.com/highcharts.src.js"></script>

    <script>
        var dataChart = JSON.parse('<?php echo $data  ?>')

        Highcharts.chart('container', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Tipos de Usuario'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                }
            }
        },
        series: [{
            name: 'Brands',
            colorByPoint: true,
            data: dataChart
        }]
        });
    </script>
@endsection