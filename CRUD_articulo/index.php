<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM articulo";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA ARTICULOS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese sus articulos</h1>
                                <form action="insertar.php" method="POST">

                             
                                <input type="text" class="form-control mb-3" name="nombreA" placeholder="nombreA">
                                <input type="text" class="form-control mb-3" name="numeroA" placeholder="numeroA">
                                <input type="text" class="form-control mb-3" name="precioA" placeholder="precioA">
                                <input type="text" class="form-control mb-3" name="noLoteA" placeholder="noLoteA">
                                <input type="text" class="form-control mb-3" name="tipoA" placeholder="tipoA">
                                <input type="text" class="form-control mb-3" name="fechaCaducidadA" placeholder="fechaCaducidadA">
                                    
                                    <input type="submit" class="btn btn-primary">
                                    <a href="../index.php">Inicio</a>
                                  
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>IDarticulo</th>
                                        <th>nombreA</th>
                                        <th>numeroA</th>
                                        <th>precioA</th>
                                        <th>noLoteA</th>
                                        <th>tipoA</th>
                                        <th>fechaCaducidadA</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            do{
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['IDarticulo']?></th>
                                                <th><?php  echo $row['nombreA']?></th>
                                                <th><?php  echo $row['numeroA']?></th>
                                                <th><?php  echo $row['precioA']?></th>    
                                                <th><?php  echo $row['noLoteA']?></th>    
                                                <th><?php  echo $row['tipoA']?></th>    
                                                <th><?php  echo $row['fechaCaducidadA']?></th>    
                                                <th><a href="actualizar.php?id=<?php echo $row['IDarticulo'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['IDarticulo'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }while($row=mysqli_fetch_array($query));
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>