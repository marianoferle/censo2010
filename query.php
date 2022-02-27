<?php 

require_once('includes/conexion.php'); 

$db_tabla = "censo";
$db_tabla2 = "poblacion";
$db_tabla3 = "compu";

/*........................................*/

if(isset($_GET['tipo'])){
  $tipo = $_GET['tipo'];
}else{
  $tipo = "null";
}

/*........................................*/

if($tipo == "load3"){
  $db_resultado = mysqli_query($db_conexion,"SELECT * FROM ". $db_tabla3 .";");
  if(!$db_resultado){
    die("La consulta a la base de datos ha fallado: " . mysqli_error());
  }else{
    $num_filas = mysqli_num_rows($db_resultado);
    if ($num_filas == 0){ return ""; 
    }else{
      while($fila = mysqli_fetch_array($db_resultado)){
      echo $fila[0] .",". 
	         $fila[1] .",".
		       $fila[2] .",". 
	         $fila[3] .",".
		       $fila[4] .",". 
	         $fila[5] .",".
		       $fila[6] ."\n";
       }
     }//else
}//else
}else if ($tipo == "load") {
  $db_resultado = mysqli_query($db_conexion,"SELECT * FROM ". $db_tabla .";");
  if(!$db_resultado){
    die("La consulta a la base de datos ha fallado: " . mysqli_error());
  }else{
  $num_filas = mysqli_num_rows($db_resultado);
  if($num_filas == 0){ return ""; }else{  
    while($fila = mysqli_fetch_array($db_resultado)){
      echo $fila[0] .",". 
	         $fila[1] .",". 
	         $fila[2] .",".
		       $fila[3] ."\n";
     }
   }
 }//else
}else if ($tipo == "load2"){
  $db_resultado = mysqli_query($db_conexion,"SELECT * FROM ". $db_tabla2 .";" );
  if(!$db_resultado){
      die("La consulta a la base de datos ha fallado: " . mysqli_error());
  }else{
    $num_filas = mysqli_num_rows($db_resultado);
    if($num_filas == 0) { return ""; }else{
        while($fila = mysqli_fetch_array($db_resultado)){
          echo $fila[1] .",". 
    	         $fila[2] .",". 
    		       $fila[3] .",". 
    		       $fila[4] .",". 
    		       $fila[5] .",". 
    		       $fila[6] .",". 
    		       $fila[7] .",". 
    		       $fila[8] .",". 
    		       $fila[9] .",". 
    	         $fila[10] ."\n";
        }
  }//else
}//else
}else{
  echo "Sólo funciona con tipo=cargar,tipo=salvar,tipo=limpiar";
}


mysqli_close($db_conexion);
?>