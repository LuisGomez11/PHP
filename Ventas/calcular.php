<?php

$producto = $_POST['producto'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];
$total = $precio * $cantidad;

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Cuenta</title>
    <link rel="stylesheet" type="text/css" media="screen" href="estilo.css" />
</head>
<body>
    <h1>Total a pagar:</h1>
    <p>Producto: <?php echo $producto;?></p>
    <p>Precio unitario: $<?php echo $precio;?></p>
    <p>Cantidad: <?php echo $cantidad;?> unidades</p>
    <p>Total de cuenta: $<?php echo $total;?></p>
</body>
</html>