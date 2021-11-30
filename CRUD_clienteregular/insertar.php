<?php
include("conexion.php");
$con=conectar();

$IDcliente=$_POST['IDcliente'];
$nombreC=$_POST['nombreC'];
$noIdentificadorC=$_POST['noIdentificadorC'];
$noTicketsC=$_POST['noTicketsC'];
$comprasTotalesC=$_POST['comprasTotalesC'];
$PuntosAcumC=$_POST['PuntosAcumC'];
$fechadeIngresoC=$_POST['fechadeIngresoC'];


$sql="INSERT INTO clienteregular VALUES('$IDcliente','$nombreC','$noIdentificadorC','$noTicketsC','$comprasTotalesC','$PuntosAcumC','$fechadeIngresoC')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
}
?>