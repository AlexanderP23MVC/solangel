<?php


function eliminarAdministrador($id){

    include 'conection.php';
    
    $sql = "DELETE FROM `username` WHERE id = $id";
    $result = $conn->query($sql);
    header("Location: ../admin.php");
}

eliminarAdministrador($_GET["id"]);
