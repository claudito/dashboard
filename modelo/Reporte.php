<?php 

class Reporte
{


function top_compras($top=10)
{
try {

$conexion =  Conexion::get_conexion();
/*$query =  "SELECT c.ruc,c.razon_social,SUM(d.cantidad) as cantidad  FROM compras_cab c
INNER JOIN compras_det d ON c.numero=d.numero
GROUP by c.ruc
ORDER BY SUM(d.cantidad)  DESC limit ".$top."";*/
$query  = "CALL top_compras(".$top.")";
$statement =  $conexion->prepare($query);
//$statement->bindParam(':top',$top);
$statement->execute();
$result = $statement->fetchAll();
return $result;

} catch (Exception $e) {
	
  echo "Error: ".$e->getMessage();

}


}



}



 ?>