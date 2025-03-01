<?php
$servername = "localhost";
$username = "root"; // El usuario por defecto de XAMPP es 'root'
$password = ""; // La contraseña por defecto de XAMPP es vacía
$dbname = "safedata"; // Cambia esto por el nombre de tu base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtener la lista de usuarios
$sql = "SELECT nom, ape, acceso FROM entrada";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>Nombre</th><th>Apellido</th><th>Acceso</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["nom"] . "</td><td>" . $row["ape"] . "</td><td>" . $row["acceso"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No hay usuarios registrados.";
}

$conn->close();
?>