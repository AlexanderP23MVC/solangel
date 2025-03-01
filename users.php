<?php
// registro.php
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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $ape = $_POST['ape'];
    $acceso = $_POST['acceso'];
   

    // Preparar y ejecutar la consulta
    $stmt = $conn->prepare("INSERT INTO entrada (nom, ape, acceso) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $nom, $ape, $acceso);

    if ($stmt->execute()) {
        echo "Registro exitoso";
        // Redirigir a una página de bienvenida después del registro exitoso
        header("Location: Home.html");
        exit();
    } else {
        echo "Error en el registro: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>