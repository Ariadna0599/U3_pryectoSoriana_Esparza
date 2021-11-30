<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM articuloslista";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA CLIENTES</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese sus datos</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="articulo1" placeholder="articulo1">
                                    <input type="text" class="form-control mb-3" name="articulo2" placeholder="articulo2">
                                    <input type="text" class="form-control mb-3" name="articulo3" placeholder="articulo3">
                                    <input type="text" class="form-control mb-3" name="articulo4" placeholder="articulo4">
                                    <input type="text" class="form-control mb-3" name="articulo5" placeholder="articulo5">
                                    <input type="text" class="form-control mb-3" name="articulo6" placeholder="articulo6">
                                    
                                    <input type="submit" class="btn btn-primary">
                                    <a href="../index.php">Inicio</a>
                                    <style>
                                        a[href="../index.php"]{
                                            background-color: #0d6efd;
                                            border-radius: 5px;
                                            color: #fff;
                                            text-decoration: none;
                                            padding: 8px 12px;
                                            transform: translateY(10px);
                                            display: block;
                                            width: max-content;
                                        }
                                    </style>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-success table-striped" >
                                    <tr>
                                        <th>IDlista</th>
                                        <th>articulo2</th>
                                        <th>articulo3</th>
                                        <th>articulo4</th>
                                        <th>articulo5</th>
                                        <th>articulo6</th>
                                        <th>articulo7</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            do{
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['IDlista_articulos']?></th>    
                                                <th><?php  echo $row['articulo1']?></th>
                                                <th><?php  echo $row['articulo2']?></th>
                                                <th><?php  echo $row['articulo3']?></th>
                                                <th><?php  echo $row['articulo4']?></th>    
                                                <th><?php  echo $row['articulo5']?></th>    
                                                <th><?php  echo $row['articulo6']?></th>    
                                                <th><a href="actualizar.php?id=<?php echo $row['IDlista_articulos'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['IDlista_articulos'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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