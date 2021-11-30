<?php
include("conexion.php");
$con=conectar();


$IDarticulo=$_POST['IDarticulo'];
$nombreA=$_POST['nombreA'];
$numeroA=$_POST['numeroA'];
$precioA=$_POST['precioA'];
$noLoteA=$_POST['noLoteA'];
$tipoA=$_POST['tipoA'];
$fechaCaducidadA = $_POST['fechaCaducidadA'];



$sql="INSERT INTO articulo VALUES('$IDarticulo','$nombreA','$numeroA','$precioA','$noLoteA','$tipoA','$fechaCaducidadA')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
}else{
}
?>