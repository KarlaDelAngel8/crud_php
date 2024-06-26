<?php
include 'db.php';

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$menu_padre = $_POST['menu_padre'];
$descripcion = $_POST['descripcion'];

$sql = "UPDATE items SET nombre='$nombre', menu_padre='$menu_padre', descripcion='$descripcion' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Registro actualizado exitosamente";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location: index.php");
exit;
?>