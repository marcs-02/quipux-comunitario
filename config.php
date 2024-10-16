<?php
// Configuración de la base de datos
$db_host = '192.168.0.100';
$db_user = 'postgres';
$db_password = 'postgres';
$db_name = 'transaccional.db'; // Asegúrate de que esto sea correcto para PostgreSQL

$connection_string = "host=$db_host dbname=$db_name user=$db_user password=$db_password";
$connection = pg_connect($connection_string);
if (!$connection) {
    die('Error de conexión: ' . pg_last_error());
}

?>
