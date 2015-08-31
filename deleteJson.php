<?php
include('conne.php');
require_once("Idiorm.php");

if($_SERVER['REQUEST_METHOD']=="POST")
{
      try 
      {
 			$table = ORM::for_table('Tbl_Usuario')
   		->where_equal('id',  json_decode($_POST['id'])->id)
   	   ->delete_many();
       
       echo "Delete User with Json!";

      } 
      catch (Exception $e)
      {
              echo 'Excepción capturada: ',  $e->getMessage(), "\n";
      }
}
 else 
   {     
     echo "Error...";
   }
 
?>