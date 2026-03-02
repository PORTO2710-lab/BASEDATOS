<?php
include 'conexion.php';

$id = intval($_GET['id']);

$stmt = $conexion->prepare("DELETE FROM usuarios WHERE id = ?");
$stmt->execute([$id]);

header("Location: index.php");
exit();
?>
