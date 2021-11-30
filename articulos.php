<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Mono:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="stylos.css">
    <title>Soriana</title>
</head>
<body>
    <?php include('include_wphp/header.php'); ?>
    <?php include('include_wphp/nav.php'); ?>
    
    <div class="contenedor-articulos">
        <div class="formulario-articulos">
            <form action="" method="POST">
                <h1>Ingresa hasta un maximo de 5 articulos</h1>
                <input type="text" name="articulo1" placeholder="Ingresa el producto que desees" id="">
                <input type="text" name="articulo2" placeholder="Ingresa el producto que desees" id="">
                <input type="text" name="articulo3" placeholder="Ingresa el producto que desees" id="">
                <input type="text" name="articulo4" placeholder="Ingresa el producto que desees" id="">
                <input type="text" name="articulo5" placeholder="Ingresa el producto que desees" id="">
                <input type="submit" name="escogerArticulos" value="Agregar al carrito" id="">
            </form>
            <?php 
                 if(isset($_POST['escogerArticulos'])){
                    $p1 = $_POST['articulo1'];$p2 = $_POST['articulo2'];$p3 = $_POST['articulo3'];$p4 = $_POST['articulo4'];$p5 = $_POST['articulo5'];
                       
                        echo "Estos son los articulos que has adquirido:<br>
                        Articulo 1: $p1<br>
                        Articulo 2: $p2<br>
                        Articulo 3: $p3<br>
                        Articulo 4: $p4<br>
                        Articulo 5: $p5<br>
                        Realiza la compra en la pestaña de ticket";
                           
                }
            ?>
        </div>
    </div>

    <?php include('include_wphp/footer.php'); ?>
</body>
</html>