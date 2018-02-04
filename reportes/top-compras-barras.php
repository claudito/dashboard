<?php include'../autoload.php'; ?>

<div id="container_barras"></div>

<script>
Highcharts.chart('container_barras', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Top 5 de Proveedores con mas Compras'
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
