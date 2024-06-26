<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Nuevo</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h2>Agregar Nuevo</h2>
    <form action="store.php" method="post">
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" required><br>
        <label for="menu_padre">Menu Padre:</label><br>
        <input type="text" id="menu_padre" name="menu_padre" required><br>
        <label for="descripcion">Descripción:</label><br>
        <textarea id="descripcion" name="descripcion" required></textarea><br><br>
        <input type="submit" value="Guardar">
    </form>
    <br>
    <a href="index.php">Regresar</a>
</body>
</html>