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


$sql="INSERT INTO inf_ticket VALUES('$IDticket','$numeroT','$fechaT','$numeroSeguridad','$montoTicket','$sorianaUbi','$nombreCajer')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: index.php");
}
?>