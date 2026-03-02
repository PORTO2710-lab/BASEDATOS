<?php 
include 'conexion.php';

$id = intval($_GET['id']);

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nombre = $conexion->real_escape_string($_POST['nombre']);
    $email = $conexion->real_escape_string($_POST['email']);
    $conexion->query("UPDATE usuarios SET nombre='$nombre', email='$email' WHERE id=$id");
    header("Location: index.php");
    exit();
}

$resultado = $conexion->query("SELECT * FROM usuarios WHERE id=$id");
$fila = $resultado->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Usuario</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<div class="container">
    <h1>Editar Usuario</h1>
    <form method="POST">
        <input type="text" name="nombre" value="<?= $fila['nombre'] ?>" required>
        <input type="email" name="email" value="<?= $fila['email'] ?>" required>
        <button type="submit" class="btn">Actualizar</button>
        <a href="index.php" class="btn small">Volver</a>
    </form>
</div>
</body>
</html>
