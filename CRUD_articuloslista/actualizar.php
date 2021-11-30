<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM articuloslista WHERE IDlista_articulos='$id'";
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
                    
                        
                                <input type="hidden" class="form-control mb-3" name="IDlista_articulos" placeholder="IDlista_articulos" value="<?php echo $row['IDlista_articulos']  ?>">
                                <input type="text" class="form-control mb-3" name="articulo1" placeholder="articulo1" value="<?php echo $row['articulo1']  ?>">
                                <input type="text" class="form-control mb-3" name="articulo2" placeholder="articulo2" value="<?php echo $row['articulo2']  ?>">
                                <input type="text" class="form-control mb-3" name="articulo3" placeholder="articulo3" value="<?php echo $row['articulo3']  ?>">
                                <input type="text" class="form-control mb-3" name="articulo4" placeholder="articulo4" value="<?php echo $row['articulo4']  ?>">
                                <input type="text" class="form-control mb-3" name="articulo5" placeholder="articulo5" value="<?php echo $row['articulo5']  ?>">
                                <input type="text" class="form-control mb-3" name="articulo6" placeholder="articulo6" value="<?php echo $row['articulo6']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>