<?php
$database = "mydb";
$user = "myuser";
$password = "password";
$host = "mysql";

try {
    $connection = new PDO("mysql:host={$host};dbname={$database};charset=utf8", $user, $password);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $id = $_POST["id"];
        $accion = $_POST["accion"];

        if ($accion === "comprar") {
            $query = $connection->prepare("UPDATE pinturas SET comprar = NOT comprar WHERE id = ?");
        } elseif ($accion === "tengo") {
            $query = $connection->prepare("UPDATE pinturas SET tengo = NOT tengo WHERE id = ?");
        }

        $query->execute([$id]);
    }

    // Recarga la página actual después de la acción
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit; // Para asegurarnos de que el script se detenga después de la redirección
} catch (PDOException $e) {
    echo "Error en la conexión: " . $e->getMessage();
}
