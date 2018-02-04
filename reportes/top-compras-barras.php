<?php include'../autoload.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Top Compras Barras</title>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
</head>
<body>
<div id="container" style="min-width: 300px; height: 400px; margin: 0 auto"></div>


<script>
Highcharts.chart('container', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'World\'s largest cities per 2014'
    },
    subtitle: {
        text: 'Source: <a href="http://en.wikipedia.org/wiki/List_of_cities_proper_by_population">Wikipedia</a>'
    },
    xAxis: {
        type: 'category',
        labels: {
            rotation: -45,
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Cantidad (unidades)'
        }
    },
    legend: {
        enabled: false
    },
    tooltip: {
        pointFormat: 'Cantidad: <b>{point.y:.1f} Soles</b>'
    },
    series: [{
        name: 'Population',
        data: [
           


         <?php foreach (Reporte::top_compras(5) as $key => $value): ?>

            ['<?php echo $value["razon_social"] ?>', <?php echo $value['cantidad'] ?>],


  
        <?php endforeach ?>
       



          
        ],
        dataLabels: {
            enabled: true,
            rotation: -90,
            color: '#FFFFFF',
            align: 'right',
            format: '{point.y:.1f}', // one decimal
            y: 10, // 10 pixels down from the top
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    }]
});
</script>
</body>
</html>