<?php 
include 'conexion.php';
$resultado = $conexion->query("SELECT * FROM usuarios");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Servicio BD - Listado</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
<div class="container">
    <h1>Listado de Usuarios</h1>
    <a href="agregar.php" class="btn">Agregar Usuario</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Acciones</th>
        </tr>
        <?php while($fila = $resultado->fetch_assoc()): ?>
        <tr>
            <td><?= $fila['id'] ?></td>
            <td><?= $fila['nombre'] ?></td>
            <td><?= $fila['email'] ?></td>
            <td>
                <a class="btn small" href="editar.php?id=<?= $fila['id'] ?>">Editar</a>
                <a class="btn small danger" href="eliminar.php?id=<?= $fila['id'] ?>" 
                   onclick="return confirm('¿Eliminar usuario?')">Eliminar</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</div>
</body>
</html>
