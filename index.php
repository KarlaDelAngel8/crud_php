<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD en PHP</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Menu Padre</th>
                <th>Descripción</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'db.php';
            $sql = "SELECT * FROM items";
            $result = $conn->query($sql);
            
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['nombre'] . "</td>";
                    echo "<td>" . $row['menu_padre'] . "</td>";
                    echo "<td>" . $row['descripcion'] . "</td>";
                    echo "<td><a href='edit.php?id=" . $row['id'] . "'>Editar</a> | <a href='delete.php?id=" . $row['id'] . "'>Eliminar</a></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No hay registros</td></tr>";
            }
            $conn->close();
            ?>
        </tbody>
    </table>
    <br>
    <a href="create.php">Agregar Nuevo</a>
    <a href="saveTask.php">Formulario</a>


    <h2>Alta de Menú</h2>
    <form action="procesar_menu.php" method="post">
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre"><br>
        <label for="menu_padre">Menú Padre (ID):</label><br>
        <input type="number" id="menu_padre" name="menu_padre"><br>
        <label for="descripcion">Descripción:</label><br>
        <textarea id="descripcion" name="descripcion"></textarea><br><br>
        <input type="submit" value="Crear Menú">
    </form>

    <h2>Menús Existentes</h2>
    <div id="menus">
        <?php include 'listar_menus.php'; ?>
    </div>

    <div id="descripcionMenu"></div>

    <script>
        function mostrarDescripcion(descripcion) {
            document.getElementById('descripcionMenu').innerText = descripcion;
        }
    </script>
</body>
</html>