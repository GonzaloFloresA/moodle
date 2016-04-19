<?php 



if(isset($_POST['nombre']) && isset($_POST['edad']))
{  
	session_start(); 
	echo $_POST['nombre'];
	echo "<br >";
	echo $_POST['edad'];
	echo "<br >";
	echo 'session_id() : ' . session_id(); 
	//header('Content-type: view.php');
}else{
 echo "no llego nada";
	
  
   ?>
