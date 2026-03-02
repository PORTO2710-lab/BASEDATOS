<?php 
include 'conexion.php';

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nombre = $conexion->real_escape_string($_POST['nombre']);
    $email = $conexion->real_escape_string($_POST['email']);
    $conexion->query("INSERT INTO usuarios(nombre,email) VALUES('$nombre','$email')");
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar Usuario</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<div class="container">
    <h1>Agregar Usuario</h1>
    <form method="POST">
        <input type="text" name="nombre" placeholder="Nombre" required>
        <input type="email" name="email" placeholder="Email" required>
        <button type="submit" class="btn">Guardar</button>
        <a href="index.php" class="btn small">Volver</a>
    </form>
</div>
</body>
</html>
