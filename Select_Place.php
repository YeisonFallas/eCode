<?php
include('conne.php');
require_once("Idiorm.php");

try 
{

$table = ORM::for_table('Tbl_Routes')->find_array();
  
header('Content-type: Application/json');//asignacion de un tipo json

//  echo $table->rowCount();
  echo json_encode($table);

} catch (Exception $e)
{
        echo 'Excepción capturada: ',  $e->getMessage(), "\n";
}

?>