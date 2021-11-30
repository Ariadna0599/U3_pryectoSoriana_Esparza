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

$sql = "UPDATE articulo SET nombreA='$nombreA', numeroA='$numeroA', precioA='$precioA', noLoteA='$noLoteA', tipoA='$tipoA', fechaCaducidadA='$fechaCaducidadA' WHERE IDarticulo = '$IDarticulo'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }else{
        echo "error";
    }
?>