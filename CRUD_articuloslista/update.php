<?php

include("conexion.php");
$con=conectar();

$IDlista_articulos=$_POST['IDlista_articulos'];
$articulo1=$_POST['articulo1'];
$articulo2=$_POST['articulo2'];
$articulo3=$_POST['articulo3'];
$articulo4=$_POST['articulo4'];
$articulo5=$_POST['articulo5'];
$articulo6=$_POST['articulo6'];

$sql = "UPDATE articuloslista SET articulo1='$articulo1', articulo2='$articulo2', articulo3='$articulo3', articulo4='$articulo4', articulo5='$articulo5',articulo6 ='$articulo6' WHERE IDlista_articulos = '$IDlista_articulos'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }
   
?>