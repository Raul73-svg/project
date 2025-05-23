<!-- <?php include('conexion.php'); ?>-->
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
   <!-- <thead>
        <th>dni</th>
        <th>nombre</th>
        <th>apellidos</th>
        <th>ciudad</th>
    </thead>
    <tbody>
        <?=cargartabla($conexion) ?>
    </tbody> -->
</body>
</html>
