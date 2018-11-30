<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="estilo.css" />

</head>
<body>
    <div class="container">
        <div class= page-header>
            <h1>Formulario Html y Php <small>Obtención de datos</small></h1>
        </div>
    <div class="row">
        <div class="col-md-6-col-md-offset-3">

            <?php

              if (isset($_POST['submit'])) {
                  $nom = $_POST['nombre'];
                  $edad = $_POST['edad'];
                  $leng = $_POST['leng'];
                if (strlen($_POST['nombre']) > 0) {
                    echo "El nombre ingresado es: ",$nom;
                } else {
                    header ("location: index.php");
                }
                if (strlen($_POST['edad']) > 0) {
                    echo "La edad ingresada es: ",$edad;
                } else {
                    header ("location: index.php");
                }
                if (strlen($_POST['leng']) > 0) {
                    echo "El lenguaje ingresado es: ",$leng;
                } else {
                    header ("location: index.php");
                }

              }  else{

                  header ("location: index.php");

              }

            ?>

        </div>
        
    </div>

    </div>
</body>
</html>
