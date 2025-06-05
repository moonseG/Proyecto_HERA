S<?php
// Configuración de la conexión
$host = 'localhost'; // Cambia esto si tu servidor de base de datos está en otro lugar
$dbname = 'proyecto_hera'; // Nombre de la base de datos
$username = 'root'; // Tu usuario de la base de datos
$password = 'root'; // Contraseña de la base de datos

try {
    // Crear una instancia PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    // Configurar opciones adicionales (opcional)
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "¡Conexión exitosa!";
} catch (PDOException $e) {
    // Manejar errores
    echo "Error de conexión: " . $e->getMessage();
}
header('Location: ../vista/menu_alumnas.php');

// Cerrar conexión a la base de datos
//$pdo = null;
?>
