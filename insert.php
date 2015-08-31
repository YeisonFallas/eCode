<?php
include('conne.php');
require_once("Idiorm.php");


if($_SERVER['REQUEST_METHOD']=="POST")
{
      try 
      {
        
        $table = ORM::for_table('Tbl_Usuario')->create();
		 // $table->id = $_POST['id'];;
		  $table->name = $_POST['name'];
		  $table->lastname = $_POST['lastname'];
		  $table->cedula =  $_POST['cedula'];
        $table->save();
        echo "¡Insert User!";

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