<?php
include 'db.php';

$id = $_GET['id'];

$sql = "SELECT * FROM items WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Registro</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Editar Registro</h2>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" value="<?php echo $row['nombre']; ?>" required><br>
        <label for="menu_padre">Menu Padre:</label><br>
        <input type="text" id="menu_padre" name="menu_padre" value="<?php echo $row['menu_padre']; ?>" required><br>
        <label for="descripcion">Descripción:</label><br>
        <textarea id="descripcion" name="descripcion" required><?php echo $row['descripcion']; ?></textarea><br><br>
        <input type="submit" value="Actualizar">
    </form>
    <br>
    <a href="index.php">Regresar</a>
</body>
</html>