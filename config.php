<?php
// Configuración de la base de datos
$db_host = '192.168.0.100';
$db_user = 'postgres';
$db_password = 'postgres';
$db_name = 'transaccional';

$connection = mysqli_connect($db_host, $db_user, $db_password, $db_name);
if (!$connection) {
    die('Error de conexión: ' . mysqli_connect_error());
}

// Otras configuraciones
$activar_bloqueo_sistema = true; // Cambia a false si no deseas bloqueo
$ruta_raiz = '.'; // Ajusta la ruta
?>
