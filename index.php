<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Dashboard</title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<!-- Css -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- Jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- JS Bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- Gráficos -->
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>



</head>
<body>

<div class="container-fluid">

<div class="row">
<div class="col-md-12">

<div id="loading_pie"></div>
<div id="data_externa_pie"></div>

</div>

</div>

<div class="row">
<div class="col-md-12">

<div id="loading_barra"></div>
<div id="data_externa_barra"></div>

</div>

</div>

</div>


<script src="app/pie.js"></script>
<script src="app/barra.js"></script>
<script>loadData_pie()</script>
<script>loadData_barra()</script>
</body>
</html>