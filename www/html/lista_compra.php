<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de la compra</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Lista de la compra</h1>

    <?php
    $database = "mydb";
    $user = "myuser";
    $password = "password";
    $host = "mysql";

    try {
        $connection = new PDO("mysql:host={$host};dbname={$database};charset=utf8", $user, $password);
        $query = $connection->query("SELECT * FROM pinturas WHERE comprar = 1");
        $pinturas = $query->fetchAll(PDO::FETCH_ASSOC);

        if (empty($pinturas)) {
            echo "<p>No hay pinturas en la lista de la compra.</p>";
        } else {
            echo "<table border='1'>";
            echo "<tr><th>Nombre</th><th>Color</th><th>Acción</th></tr>";

            foreach ($pinturas as $pintura) {
                echo "<tr>";
                echo "<td>{$pintura['nombre']}</td>";
                echo "<td style='background-color: {$pintura['rgb']}; width: 50px;'>&nbsp;</td>";
                echo "<td>
                        <form action='actualizar.php' method='POST' style='display:inline;'>
                            <input type='hidden' name='id' value='{$pintura['id']}'>
                            <input type='hidden' name='accion' value='comprar'>
                            <button type='submit'>Quitar de la lista</button>
                        </form>
                      </td>";
                echo "</tr>";
            }
            echo "</table>";
        }
    } catch (PDOException $e) {
        echo "Error en la conexión: " . $e->getMessage();
    }
    ?>

    <br>
    <a href="index.php"><button>Volver</button></a>
</body>
</html>
