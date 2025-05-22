<?php

$conexion = mysqli_connect('raulserver','raul','1234', 'prueba')or die(mysgl_error($mysqli));

insertar($conexion);

function insertar($conexion){
$DNI = $_POST ['DNI'];
$nombre = $_POST ['nombre'];
$ape1 = $_POST ['ape1'];
$ape2 = $_POST ['ape2'];
$ciudad = $_POST ['ciudad'];
$consulta = "INSERT INTO personas(DNI, nombre, ape1, ape2, ciudad) VALUES '('$DNI', '$nombre', '$ape1', '$ape2', '$ciudad')";
mysqli_query($conexion, $consultas);
mysqli_close($conexion);
}
 

function cargartabla($conexion){
    $consulta = "SELECT * FROM  prueba";
    $resultado = mysqli_query($conexion ,$consulta);


    while($fila = mysql_feth_array($resultado)){
        echo "<tr>";
        echo "<td>".$fila ['DNI'];
        echo "<td>".$fila ['nombre'];
        echo "<td>".$fila ['primerapellido'];
        echo "<td>".$fila ['segundopellido'];
        echo "<td>".$fila ['ciudad'];
        echo "<tr>";
    }
    ysqli_close($conexion);
}
?>