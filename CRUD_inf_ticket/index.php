<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM inf_ticket";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> PAGINA EMPLEADOS</title>
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

                                    <input type="text" class="form-control mb-3" name="numeroT" placeholder="numeroT">
                                    <input type="text" class="form-control mb-3" name="fechaT" placeholder="fechaT">
                                    <input type="text" class="form-control mb-3" name="numeroSeguridad" placeholder="numeroSeguridad">
                                    <input type="text" class="form-control mb-3" name="montoTicket" placeholder="montoTicket">
                                    <input type="text" class="form-control mb-3" name="sorianaUbi" placeholder="sorianaUbi">
                                    <input type="text" class="form-control mb-3" name="nombreCajer" placeholder="nombreCajer">
                                    
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
                                        <th>IDticket</th>
                                        <th>NumeroT</th>
                                        <th>FechaT</th>
                                        <th>numeroSeguridad</th>
                                        <th>montoTicket</th>
                                        <th>SorianaUbi</th>
                                        <th>nombreCajer</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            do{
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['IDticket']?></th>
                                                <th><?php  echo $row['numeroT']?></th>
                                                <th><?php  echo $row['fechaT']?></th>
                                                <th><?php  echo $row['numeroSeguridad']?></th>    
                                                <th><?php  echo $row['montoTicket']?></th>    
                                                <th><?php  echo $row['sorianaUbi']?></th>    
                                                <th><?php  echo $row['nombreCajer']?></th>    
                                                <th><a href="actualizar.php?id=<?php echo $row['IDticket'] ?>" class="btn btn-info">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['IDticket'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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