<?php


function eliminarEspecialista($id){

    include 'conection.php';
    
    $sql = "DELETE FROM `username` WHERE id = $id";
    $result = $conn->query($sql);
    header("Location: ../especialistas.php");
}

eliminarEspecialista($_GET["id"]);
