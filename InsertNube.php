<?php
include('conne.php');
require_once("Idiorm.php");


if($_SERVER['REQUEST_METHOD']=="POST")
{
      try 
      {
        
        $table = ORM::for_table('Tbl_Geolocation')->create();
		  $table->Mobile_ID = $_POST['Mobile_ID'];;
		  $table->Date = $_POST['Date'];
		  $table->Hour = $_POST['Hour'];
		  $table->Latitude =  $_POST['Latitude'];
		  $table->Longitude = $_POST['Longitude'];
		 
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

