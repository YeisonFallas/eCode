<?php
include('conne.php');
require_once("Idiorm.php");


if($_SERVER['REQUEST_METHOD']=="POST")
{
      try 
      {
        
        
        $table = ORM::for_table('Tbl_Usuario')
		  ->find_one(json_decode($_POST['id'])->id);
          
		  //$table ->id = $_POST['id'];
		  $table ->name =json_decode( $_POST['name'])->name;
		  $table ->lastname = json_decode($_POST['lastname'])->lastname;
		  $table ->cedula = json_decode( $_POST['cedula'])->cedula;
        $table ->save();
        echo "¡Update User with Json!";
        
      } 
      catch (Exception $e)
      {
              echo 'Excepción capturada: ',  $e -> getMessage(), "\n";
      }
}
 else 
   {     
     echo "Error...";
   }
 
 
?>