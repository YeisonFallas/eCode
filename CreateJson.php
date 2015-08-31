<?php
include('conne.php');
require_once("Idiorm.php");

//fjh
try 
{

$table = ORM::for_table('Tbl_Geolocation')->find_array();
  
header('Content-type: Application/json');//asignacion de un tipo json
echo json_encode( $table);

} catch (Exception $e)
{
        echo 'Excepción capturada: ',  $e->getMessage(), "\n";
  echo "Hola Mundo...";
}

?>