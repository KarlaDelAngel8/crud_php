<?php
include 'db.php';

$nombre = $_POST['nombre'];
$menu_padre = $_POST['menu_padre'];
$descripcion = $_POST['descripcion'];

$sql = "INSERT INTO items (nombre, menu_padre, descripcion) VALUES ('$nombre', '$menu_padre', '$descripcion')";

if ($conn->query($sql) === TRUE) {
    echo "Nuevo registro creado exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location: index.php");
exit;
?>