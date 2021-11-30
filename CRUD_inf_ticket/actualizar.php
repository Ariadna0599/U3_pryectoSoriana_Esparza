<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM inf_ticket WHERE IDticket='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                        
                                <input type="text" class="form-control mb-3" name="IDticket" placeholder="IDticket" value="<?php echo $row['IDticket']  ?>">
                                <input type="text" class="form-control mb-3" name="numeroT" placeholder="numeroT" value="<?php echo $row['numeroT']  ?>">
                                <input type="text" class="form-control mb-3" name="fechaT" placeholder="fechaT" value="<?php echo $row['fechaT']  ?>">
                                <input type="text" class="form-control mb-3" name="numeroSeguridad" placeholder="numeroSeguridad" value="<?php echo $row['numeroSeguridad']  ?>">
                                <input type="text" class="form-control mb-3" name="montoTicket" placeholder="montoTicket" value="<?php echo $row['montoTicket']  ?>">
                                <input type="text" class="form-control mb-3" name="sorianaUbi" placeholder="sorianaUbi" value="<?php echo $row['sorianaUbi']  ?>">
                                <input type="text" class="form-control mb-3" name="nombreCajer" placeholder="nombreCajer" value="<?php echo $row['nombreCajer']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>