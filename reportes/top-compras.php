<?php include'../autoload.php'; ?>

<div id="container_pie" ></div>


<script>
// Build the chart
Highcharts.chart('container_pie', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Compras'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: false
            },
            showInLegend: true
        }
    },
    series: [{
        name: 'Brands',
        colorByPoint: true,
        data: [

                 

        <?php foreach (Reporte::top_compras() as $key => $value): ?>
        {
            name: '<?php echo $value["razon_social"] ?>',
            y: <?php echo $value['cantidad'] ?>
        }, 
        <?php endforeach ?>






        ]
    }]
});
</script>
