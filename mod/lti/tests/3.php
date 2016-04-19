<?php
header('Content-type: application/json'); 

$array = ["nombre"=>$_GET["dato"],"apellido"=>"machete"];

		  $datos=json_encode($array);
		  echo($datos);
 ?>
