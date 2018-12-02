

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Registro</title>
    <link rel="stylesheet" type="text/css" href="estilo.css" />
</head>
<body class="body">
    <div class="titulo">
        <h2>Formulario Html - Php </h2><span>Luis Gomez</span>
    </div>
    
    <form method="post" action="registrar.php">
        <div class="formulario">
            <h3 class="titulo2">Ingrese sus datos</h3>
            <p><input type="text" placeholder="ID de usuario" name="ID" class="inputs"></p>
            <p><input type="text" placeholder="Nombre" name="nombre" class="inputs"></p>
            <p><input type="text" placeholder="Lenguaje de programacion favorito" name="leng" class="inputs"></p>
            <input type="submit" name="submit" value="GUARDAR" class="boton">
        </div>
    </form>
</body>
</html>