<?php
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST['nombre'];
    $email  = $_POST['email'];

    $stmt = $conexion->prepare(
        "INSERT INTO usuarios (nombre, email) VALUES (?, ?)"
    );

    $stmt->execute([$nombre, $email]);

    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Agregar Usuario</title>
</head>
<body>

<h2>Agregar Usuario</h2>

<form method="POST">
    <input type="text" name="nombre" placeholder="Nombre" required>
    <br><br>
    <input type="email" name="email" placeholder="Email" required>
    <br><br>
    <button type="submit">Guardar</button>
</form>

</body>
</html>
