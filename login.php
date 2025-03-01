<?php
// Datos de conexión
$servername = "localhost"; // servidor a conectar
$username = "root"; // El usuario por defecto para MySQL es 'root'
$dbpassword = ""; // La contraseña para mysql
$dbname = "safedata"; // // nombre de BD

// Crear conexión
$conn = new mysqli($servername, $username, $dbpassword, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}


// Comprobar si los datos fueron enviados
if (isset($_POST['usuario']) && isset($_POST['password'])) {
    // Obtener datos del formulario
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];

    // Consulta SQL para validar el usuario
    $sql = "SELECT * FROM `username` WHERE `usuario` = ? AND `password` = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ss', $usuario, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "Inicio de sesión exitoso. ¡Bienvenido, $usuario!";
        // Aquí puedes redirigir al usuario a otra página o hacer algo más
        header("Location: Home.html");
    } else {
        echo "Nombre de usuario o contraseña incorrectos.";
    }

    $stmt->close();
} else {
    echo "Por favor complete ambos campos.";
}

$conn->close();
?>