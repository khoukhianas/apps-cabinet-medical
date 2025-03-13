<x-navbar1>
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    <head>
        <meta charset="utf-8">
        <title>Chart</title>
    </head>
    
    <body>
    
       <center> <h1>Nombres des Locations par Mois
        </h1></center>
       
        <div id="container"></div>
    </body>
    
    <script src="{{asset('js/highchart.js')}}"></script>
    
    <script type="text/javascript">
      var livreData = <?php echo json_encode($consultationCounts)?>;
    
    Highcharts.chart('container', {
        title: {
            text: 'Number of Locations'
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            categories: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
                'October', 'November', 'December'
            ]
        },
        yAxis: {
            title: {
                text: 'Number of Locations'
            },
            labels: {
                formatter: function() {
                    return Math.floor(this.value); // Display only integer values
                }
            }
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle'
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: 'Number of Locations',
            data: livreData
        }],
        responsive: {
            rules: [{
                condition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout: 'horizontal',
                        align: 'center',
                        verticalAlign: 'bottom'
                    }
                }
            }]
        }
    });
    
    
    </script>
    
    </html>
    </x-navbar1>