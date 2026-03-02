<?php
include 'conexion.php';
$id = intval($_GET['id']);
$conexion->query("DELETE FROM usuarios WHERE id=$id");
header("Location: index.php");
exit();
?>
