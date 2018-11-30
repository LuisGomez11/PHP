<?php

session_start();

if (isset($_SESSION['username'])) {
    echo "Bienvenido, ", $_SESSION['username'];
} else {
    echo "No tiene acceso";
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Mi pagina</title>

</head>
<body>
    Contenido
</body>
</html>