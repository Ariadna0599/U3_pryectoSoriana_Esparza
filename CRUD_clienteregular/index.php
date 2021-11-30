<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM clienteregular";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA DEPARTAMENTOS</title>
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

                                    
                                
                                <input type="text" class="form-control mb-3" name="nombreC" placeholder="nombreC">
                                <input type="text" class="form-control mb-3" name="noIdentificadorC" placeholder="noIdentificadorC">
                                <input type="text" class="form-control mb-3" name="noTicketsC" placeholder="noTicketsC" >
                                <input type="text" class="form-control mb-3" name="comprasTotalesC" placeholder="comprasTotalesC">
                                <input type="text" class="form-control mb-3" name="PuntosAcumC" placeholder="PuntosAcumC">
                                <input type="text" class="form-control mb-3" name="fechadeIngresoC" placeholder="fechadeIngresoC">
                                
                                    
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
                                        <th>IDcliente</th>
                                        <th>nombreC</th>
                                        <th>noIdentificadorC</th>
                                        <th>noTicketsC</th>
                                        <th>comprasTotalesC</th>
                                        <th>PuntosAcumC</th>
                                        <th>fechadeIngresoC</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            do{
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['IDcliente']?></th>
                                                <th><?php  echo $row['nombreC']?></th>
                                                <th><?php  echo $row['noIdentificadorC']?></th>
                                                <th><?php  echo $row['noTicketsC']?></th>    
                                                <th><?php  echo $row['comprasTotalesC']?></th>    
                                                <th><?php  echo $row['PuntosAcumC']?></th>    
                                                <th><?php  echo $row['fechadeIngresoC']?></th>    
                                                <th><a href="actualizar.php?id=<?php echo $row['IDcliente'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['IDcliente'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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