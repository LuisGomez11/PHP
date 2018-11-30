<?php

session_start();

if (isset($_POST['submit'])) {
    
    $username = "Luis";
    $password = "12345678";

    if ((isset($_POST['usuario'])) || (isset($_POST['contraseña']))){
        $nom = $_POST['usuario'];
        $contraseña = $_POST['contraseña'];

        if (($nom == $username) && ($contraseña == $password)) {
            $_SESSION['username'] = $nom;
            header("location: user.php");
        } else {
            header("location: index.php");
        }

    } else {
        header("location: index.php");
    }

    

} else {
    header("location: index.php");
}

?>