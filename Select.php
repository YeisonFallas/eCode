<?php
include('conne.php');
require_once("Idiorm.php");


try 
{

//$table = ORM::for_table('Tbl_Usuario')->find_array();
$table = ORM::for_table('Tbl_Test')->find_array();

header('Content-type: Application/json');//asignacion de un tipo json
echo json_encode($table);

} catch (Exception $e)
{
        echo 'Excepción capturada: ',  $e->getMessage(), "\n";
}

?>