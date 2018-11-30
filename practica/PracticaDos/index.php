<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="estilo.css" />
</head>
<body>
    <div class="titulo">
        <h2>Ejemplo de un formulario login </h2><span>Luis Gomez</span>
    </div>
    
    <form method="post" action="manejador.php">
        <div class="formulario">
            <h3 class="titulo2">Ingrese sus datos</h3>
            <input type="text" placeholder="Usuario" name="usuario" class="inputs" required autofocus><br>
            <input type="password" placeholder="Contrasela" name="contraseña" class="inputs" required><br><br>
            <input type="submit" name="submit" value="ENVIAR" class="boton">
        </div>
    </form>
</body>
</html>