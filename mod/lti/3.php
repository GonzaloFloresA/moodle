<?php

 require_once('../../config.php');
 header('Content-type: application/json'); 
 
    isloggedin();
	global $USER,$userid1,$userNombre1;
	$userid=$USER->id;
	$userNombre=$USER->username;
	$userid1=$userid;
	$userNombre1=$userNombre;
    //echo $userNombre1;
	$array = array("id"=>$userid1, "nombre"=>$userNombre1);
	//var_dump($array);
	echo json_encode($array);
	
mysql_free_result($result);

// Cerrar la conexión
mysql_close($link);


 ?>
