<?php
$db_nombre = "mariano";$db_tabla = "censo";$db_tabla2 = "poblacion";$db_tabla3 = "compu";
$db_conexion = mysql_connect("localhost", "root", "");
if (!$db_conexion) {die("La conexion a la base de datos ha fallado: " . msql_error());}
$db_seleccion = mysql_select_db($db_nombre, $db_conexion);
if (!$db_seleccion) {die("La seleccion de la base de datos ha fallado: " . msql_error());}
?>
<?php
if (isset($_GET['tipo'])) {
  $tipo = $_GET['tipo'];
} else {
  $tipo = "null";
}
if ($tipo == "load3") {
  $db_resultado = mysql_query("SELECT * FROM " . $db_tabla3 . ";", $db_conexion);
  if (!$db_resultado) {
    die("La consulta a la base de datos ha fallado: " . msql_error());}
  $num_filas = mysql_num_rows($db_resultado);
  if ($num_filas == 0) {
    return "";
  }else{
    while($fila = mysql_fetch_array($db_resultado)) {echo $fila[0] .",".$fila[1] .",".$fila[2] .",". $fila[3] .",".$fila[4] .",". $fila[5] .",".$fila[6] ."\n";}}}
else if ($tipo == "load") {
  $db_resultado = mysql_query("SELECT * FROM " . $db_tabla . ";", $db_conexion);
  if (!$db_resultado) {
    die("La consulta a la base de datos ha fallado: " . msql_error());}
  $num_filas = mysql_num_rows($db_resultado);
  if ($num_filas == 0) {
    return "";
  }else{
    while($fila = mysql_fetch_array($db_resultado)) {echo $fila[0] .",".$fila[1] .",".$fila[2] .",".$fila[3] ."\n";}}}
else if ($tipo == "load2") {
  $db_resultado = mysql_query("SELECT * FROM " . $db_tabla2 .  ";" , $db_conexion);
  if (!$db_resultado) {
    die("La consulta a la base de datos ha fallado: " . msql_error());}
  $num_filas = mysql_num_rows($db_resultado);
  if ($num_filas == 0) {
    return "";
}else{
  while($fila = mysql_fetch_array($db_resultado)) {
    echo $fila[1] .",".$fila[2] .",".$fila[3] .",".$fila[4] .",".$fila[5] .",".$fila[6] .",".$fila[7] .",".$fila[8] .",".$fila[9] .",".$fila[10] ."\n";
  }
}
}else{echo "Sólo funciona con tipo=cargar,tipo=salvar,tipo=limpiar";}
?>
<?php
mysql_close($db_conexion);
?>