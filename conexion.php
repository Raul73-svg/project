<?php

$mysqli = new mysqli('localhost','root','1234', 'base de datos')or die(mysgl_error($mysqli));


function insertar($dni, $nombre, $apellidos, $ciudad){
    global $mysqli;
    $stmt = $mysqli->prepare("INSERT INTO project (dni, nombre, apellidos, ciudad) VALUES '(?, ?, ?, ?)");
    $stmt->bind_param("si",$dni, $nombre, $apellidos, $ciudad); 
    $stmt->execute();
    $stmt->closes();
}
 

function getpersonas(){
    global $mysqli;
    $result = $mysqli-> ("SELECT dni, nombre, apellidos, ciudad FROM project");
    return $return->fetch_all(MYSQLI_ASSOC);
}


function getpersona($dni){
    global $mysqli;
    $stmt = $mysqli->prepare("SELECT dni, nombre, apellidos, ciudad FROM project WHERE dni = ?");
    $stmt->bind_param("i", $dni);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc();
}

?>
