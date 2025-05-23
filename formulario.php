<!-- <?php include('conexion.php'); ?>-->



<?php
require 'database.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["create"])) {

        if (!empty($_POST["nombre"]) && !empty($_POST["nombre"]) && !empty($_POST["apellidos"]) && !empty($_POST["ciudad"])) {
            createpersona($_POST["nombre"], $_POST["edad"]);
        } else {
            echo "<script>alert('todos los datos son requeridos');</script>";
        }
}

$personas = getpersonas();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="conexion.php" method="post">
        <h2>formulario</h2>
        <p>
            <label for="dni">DNI</label>
            <input type="text" name="dni" maxlength="9"/>
        </p>
        <p>
            <label>nombre<input type="text" name="nombre"/></label>
        </p>
        <p>
            <label>apellidos<input type="text" name="apellidos"/></label> 
        </p>
        <p>
            <label>ciudad<input type="text" name="ciduad"/></label>
        </p>
        <input type="submit" value="enviar"/>
    </form>
     <?php foreach ($personas as $persona): ?>
                <tr>
                    <td><?php echo $persona["dni"]; ?></td>
                    <td><?php echo $persona["nombre"]; ?></td>
                    <td><?php echo $persona["apellidos"]; ?></td>
                    <td><?php echo $persona["ciudad"]; ?></td>
                </tr>
                <?php endforeach; ?>
</body>
</html>
