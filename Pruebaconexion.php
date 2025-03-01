<?php
// Datos de conexión
$server = 'localhost'; // servidor a conectar
$db_user = 'root'; // nombre de usuario para MySQL
$db_password = ''; // contraseña para MySQL
$database = 'safedata'; // nombre de BD

// Crear la conexión
$conn = new mysqli($server, $db_user, $db_password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
} else {
    echo "Conexión exitosa a la base de datos 'safedata'.<br>"; // Si tiene éxito, muestra un mensaje de confirmación.
}

/*
// Consulta SQL para insertar usuario en la tabla 'username'
$sql = "INSERT INTO `username` (`username`, `password`) VALUES ('usuario1', SHA2('contraseña1', 80))";

// Ejecutar consulta
if ($conn->query($sql) === TRUE) {
    echo "Nuevo usuario creado con éxito.";
} else {
    echo "Error al crear el usuario: " . $conn->error;
}

*/

// Cerrar la conexión
$conn->close();
?>