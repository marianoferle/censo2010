<?php
require('constantes.php');
$db_conexion = mysql_connect(DB_SERVER, DB_USER, DB_PASS);if (!$db_conexion) {die("La conexion a la base de datos ha fallado: " . msql_error());}
$db_seleccion = mysql_select_db(DB_NAME, $db_conexion);if (!$db_seleccion) {die("La seleccion de la base de datos ha fallado: " . msql_error());}
?>

