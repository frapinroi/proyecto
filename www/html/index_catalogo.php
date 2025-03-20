<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Catálogo de Pinturas</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>Catálogo de Pinturas</h1>

        <?php
        $database = "mydb";
        $user = "myuser";
        $password = "password";
        $host = "mysql";

        try {
            $connection = new PDO("mysql:host={$host};dbname={$database};charset=utf8", $user, $password);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $query = $connection->query("SELECT * FROM pinturas");
            $pinturas = $query->fetchAll(PDO::FETCH_ASSOC);

            if (empty($pinturas)) {
                echo "<p>No hay pinturas en el catálogo.</p>";
            } else {
                echo "<table>";
                echo "<tr><th>Nombre</th><th>Color</th><th>Acciones</th></tr>";

                foreach ($pinturas as $pintura) {
                    echo "<tr>";
                    echo "<td>{$pintura['nombre']}</td>";
                    echo "<td style='background-color: {$pintura['rgb']}; width: 50px;'>&nbsp;</td>";
                    echo "<td>
                            <form action='actualizar.php' method='POST' style='display:inline;'>
                                <input type='hidden' name='id' value='{$pintura['id']}'>
                                <input type='hidden' name='accion' value='comprar'>
                                <button type='submit' class='comprar-button " . ($pintura['comprar'] == 1 ? 'comprar-1' : 'comprar-0') . "'>Añadir a lista de la compra</button>
                            </form>
                            <form action='actualizar.php' method='POST' style='display:inline;'>
                                <input type='hidden' name='id' value='{$pintura['id']}'>
                                <input type='hidden' name='accion' value='tengo'>
                                <button type='submit' class='tengo-button " . ($pintura['tengo'] == 1 ? 'tengo-1' : 'tengo-0') . "'>Marcar como tengo</button>
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
        <a href="index.php"><button>Volver a la página principal</button></a>
    </div>
</body>
</html>
