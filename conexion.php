<?php

$mysqli = new mysqli('localhost','root','1234', 'personas');
if ($mysqli->connect_error) {
    die("Conexión fallida: " . $mysqli->connect_error);
}

function createpersona($dni, $nombre, $apellidos, $ciudad){
    global $mysqli;
    $stmt = $mysqli->prepare("INSERT INTO persona (dni, nombre, apellidos, ciudad) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss",$dni, $nombre, $apellidos, $ciudad); 
    $stmt->execute();
    $stmt->close();
}
 

function getpersonas() {
    global $mysqli;
    $result = $mysqli->query("SELECT dni, nombre, apellidos, ciudad FROM persona");
    return $result->fetch_all(MYSQLI_ASSOC);
}


function getpersona($dni){
    global $mysqli;
    $stmt = $mysqli->prepare("SELECT dni, nombre, apellidos, ciudad FROM persona WHERE dni = ?");
    $stmt->bind_param("s", $dni);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc();
}

?>
