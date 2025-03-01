<?php
// Datos de conexión
$servername = "localhost"; // servidor a conectar
$username = "root"; // El usuario por defecto para MySQL es 'root'
$dbpassword = ""; // La contraseña para mysql
$dbname = "safedata"; // // nombre de BD

// Crear conexión
$conn = new mysqli($servername, $username, $dbpassword, $dbname);

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