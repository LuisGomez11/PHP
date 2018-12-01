<?php

$conexion = mysqli_connect("localhost","root","","prueba");

if(!$conexion){
    echo "Error";
} else {
    echo "correcto";
}
?>