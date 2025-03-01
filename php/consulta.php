<?php
function consultaAdministradores(){

include 'conection.php';

$sql = "SELECT * FROM `username` WHERE rol LIKE '%ADMINISTRADOR%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_all(MYSQLI_ASSOC)) {
        return $row;
        
    }
} else {
    return 0;
}
}

function consultaEspecialistas(){

    include 'conection.php';

$sql = "SELECT * FROM `username` WHERE rol LIKE '%ESPECIALISTA%'";
$result = $conn->query($sql);

    if ($result->num_rows > 0) {
    
        while($row = $result->fetch_all(MYSQLI_ASSOC)) {
            return $row;
            
        }
    } else {
        return 0;
    }
}

