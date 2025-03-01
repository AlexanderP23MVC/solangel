<?php 
	session_start();

?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="stylesheet" href="Style.css">
    <title>Formulario de Registro</title>
</head>
<body>
<form action="regis.php" method="post">
<div class="container">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        <br>
        <label for="apellido">Apellido:</label>
        <input type="text" id="apellido" name="apellido" required>
        <br>
        <label for="usuario">Usuario:</label>
        <input type="text" id="usuario" name="usuario" pattern="[a-zA-Z0-9]+" required>
        <br>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <label for="rol">Rol:</label>
        <input type="text" id="rol" name="rol" required>
        <br>
        <hr>
			<input type="hidden" name="hacer">
			<button type="submit" class="registerbtn" name="Registrar" id="Registro">Registrar</button>
            </div>
    </form>
</body>
</html>

