<?php

$servername = "localhost";
$username = "root";
$dbpassword = "";
$dbname = "safedata";


$conn = new mysqli($servername, $username, $dbpassword, $dbname);


if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

