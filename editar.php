<?php 
include 'conexion.php';

$id = intval($_GET['id']);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST['nombre'];
    $email  = $_POST['email'];

    $stmt = $conexion->prepare(
        "UPDATE usuarios SET nombre = ?, email = ? WHERE id = ?"
    );

    $stmt->execute([$nombre, $email, $id]);

    header("Location: index.php");
    exit();
}

// Obtener datos actuales
$stmt = $conexion->prepare("SELECT * FROM usuarios WHERE id = ?");
$stmt->execute([$id]);
$fila = $stmt->fetch();
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
