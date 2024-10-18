<?php
function conectaDB() 
{ 
  	$host = 'sql212.infinityfree.com'; 
	$user = 'if0_37520830';  //nombre de Usuario que proporciona 000webhost
	$pass = 'uaZxLIFRlBy';

   if (!( $link = @mysqli_connect($host,$user,$pass)) )
   {
      echo "Error al realizar la conexión a la base de datos.";
      exit();
   }

   if (!mysqli_select_db($link,"if0_37520830_miempresa")) //nombre dela BD que proporciona 000webhost
   { 
      echo "Error al seleccionar la base de datos."; 
      exit(); 
   }    
   return $link; 
} 
?>