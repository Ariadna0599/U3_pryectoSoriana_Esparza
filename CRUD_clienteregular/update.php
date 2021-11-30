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


$sql = "UPDATE clienteregular SET nombreC='$nombreC', noIdentificadorC='$noIdentificadorC', noTicketsC='$noTicketsC', comprasTotalesC='$comprasTotalesC', PuntosAcumC='$PuntosAcumC', fechadeIngresoC = '$fechadeIngresoC' WHERE IDcliente = '$IDcliente'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }else{
        echo "BRUH";
    }
?>