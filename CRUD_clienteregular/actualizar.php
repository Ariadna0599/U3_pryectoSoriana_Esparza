<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM clienteregular WHERE IDcliente='$id'";
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
                    
                        
                                <input type="text" class="form-control mb-3" name="IDcliente" placeholder="IDcliente" value="<?php echo $row['IDcliente']  ?>">
                                <input type="text" class="form-control mb-3" name="nombreC" placeholder="nombreC" value="<?php echo $row['nombreC']  ?>">
                                <input type="text" class="form-control mb-3" name="noIdentificadorC" placeholder="noIdentificadorC" value="<?php echo $row['noIdentificadorC']  ?>">
                                <input type="text" class="form-control mb-3" name="noTicketsC" placeholder="noTicketsC" value="<?php echo $row['noTicketsC']  ?>">
                                <input type="text" class="form-control mb-3" name="comprasTotalesC" placeholder="comprasTotalesC" value="<?php echo $row['comprasTotalesC']  ?>">
                                <input type="text" class="form-control mb-3" name="PuntosAcumC" placeholder="PuntosAcumC" value="<?php echo $row['PuntosAcumC']  ?>">
                                <input type="text" class="form-control mb-3" name="fechadeIngresoC" placeholder="fechadeIngresoC" value="<?php echo $row['fechadeIngresoC']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>