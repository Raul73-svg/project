<?php
require 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["create"])) {

        if (!empty($_POST["dni"]) && !empty($_POST["nombre"]) && !empty($_POST["apellidos"]) && !empty($_POST["ciudad"])) {
            createpersona($_POST["dni"], $_POST["nombre"], $_POST["apellidos"], $_POST["ciudad"]);
        } else {
            echo "<script>alert('todos los datos son requeridos');</script>";
        }
}}

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
    <form  method="post">
        <h2>formulario</h2>
        <p>
            <label>DNI<input type="text" name="dni" maxlength="9"/></label>
            
        </p>
        <p>
            <label>nombre<input type="text" name="nombre"/></label>
        </p>
        <p>
            <label>apellidos<input type="text" name="apellidos"/></label> 
        </p>
        <p>
            <label>ciudad<input type="text" name="ciudad"/></label>
        </p>
        <input type="submit" name="create" value="enviar"/>
    </form>
    <h2>personas</h2>
    <table>
    <thead>
                <tr>
                    <td>dni</td>
                    <td>nombre</td>
                    <td>apellidos</td>
                    <td>ciudad</td>
                </tr>
    </thead>
    <tbody>
         <?php foreach ($personas as $persona): ?>
                <tr>
                    <td><?php echo $persona["dni"]; ?></td>
                    <td><?php echo $persona["nombre"]; ?></td>
                    <td><?php echo $persona["apellidos"]; ?></td>
                    <td><?php echo $persona["ciudad"]; ?></td>
                </tr>
                <?php endforeach; ?>
    </tbody>
    </table>
</body>
</html>
