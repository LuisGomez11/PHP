<?php

include 'conexion.php';

$ID = $_POST["ID"];
$nombre = $_POST["nombre"];
$lenguaje = $_POST["leng"];

$insertar = "INSERT INTO usuarios VALUES ('$ID', '$nombre', '$lenguaje')";

$resultado = mysqli_query($conexion, $insertar);

if(!$resultado){
    echo "Error en el registro";
} else {
    echo "Usuario registrado";
}

mysqli_close($conexion);

?>