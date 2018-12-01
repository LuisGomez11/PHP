<?php

include 'conexion.php';

$ID = $_POST["ID"];
$nombre = $_POST["nombre"];
$lenguaje = $_POST["leng"];

$insertar = "INSERT INTO usuarios VALUES ('$ID', '$nombre', '$lenguaje')";

$verificarID = mysqli_query($conexion, "SELECT * FROM usuarios WHERE ID = '$ID'");

if(mysqli_num_rows($verificarID) > 0){
    
    echo '<script>
        alert("Usuario ya registrado");
        window.history.go(-1);
        </script>';

    
    exit;
}

$resultado = mysqli_query($conexion, $insertar);

if(!$resultado){
    echo "Error en el registro";
} else {
    echo '<script>
        alert("Usuario registrado correctamente");
        window.history.go(-1);
        </script>';
}

mysqli_close($conexion);

?>