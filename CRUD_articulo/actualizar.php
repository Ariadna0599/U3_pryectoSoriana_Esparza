<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM articulo WHERE IDarticulo='$id'";
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
                    
                        
                                <input type="text" class="form-control mb-3" name="IDarticulo" placeholder="IDarticulo" value="<?php echo $row['IDarticulo']  ?>">
                                <input type="text" class="form-control mb-3" name="nombreA" placeholder="nombreA" value="<?php echo $row['nombreA']  ?>">
                                <input type="text" class="form-control mb-3" name="numeroA" placeholder="numeroA" value="<?php echo $row['numeroA']  ?>">
                                <input type="text" class="form-control mb-3" name="precioA" placeholder="precioA" value="<?php echo $row['precioA']  ?>">
                                <input type="text" class="form-control mb-3" name="no.LoteA" placeholder="no.LoteA" value="<?php echo $row['no.LoteA']  ?>">
                                <input type="text" class="form-control mb-3" name="tipoA" placeholder="tipoA" value="<?php echo $row['tipoA']  ?>">
                                <input type="text" class="form-control mb-3" name="fechaCaducidadA" placeholder="fechaCaducidadA" value="<?php echo $row['fechaCaducidadA']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>