<?php

include("conexion.php");
$con=conectar();

$IDticket=$_POST['IDticket'];
$numeroT=$_POST['numeroT'];
$fechaT=$_POST['fechaT'];
$numeroSeguridad=$_POST['numeroSeguridad'];
$montoTicket=$_POST['montoTicket'];
$sorianaUbi=$_POST['sorianaUbi'];
$nombreCajer=$_POST['nombreCajer'];

$sql = "UPDATE inf_ticket SET numeroT='$numeroT', fechaT='$fechaT', numeroSeguridad='$numeroSeguridad', montoTicket='$montoTicket', sorianaUbi='$sorianaUbi', nombreCajer='$nombreCajer' WHERE IDticket = '$IDticket'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: index.php");
    }else{
        echo "BRUH";
    }
?>