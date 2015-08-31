<?php
include('conne.php');
require_once("Idiorm.php");


if($_SERVER['REQUEST_METHOD']=="POST")
{
      try 
      {
        
         $table = ORM::for_table('Tbl_Usuario')->create();
		 // $table->id = $_POST['id']->id;
		  $table->name = json_decode($_POST['name'])->name;
		  $table->lastname = json_decode($_POST['lastname'])->lastname;
		  $table->cedula =  json_decode($_POST['cedula'])->cedula;
        $table->save();
        
        /*
         
         $JSON = {"NameJson":"Yeison"};
         Parametro = $JSON;  
         $table->name//<-campo de la tabla// = $_POST['Parametro']->NameJson;
         
         */

        echo "¡Insert User with Json!";

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