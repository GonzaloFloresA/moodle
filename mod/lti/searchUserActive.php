
<?php
//function mandarUser()
//{
require_once('../../config.php');
require_login();
global $USER;

$userid=$USER->id;
$userNombre=$USER->username;


echo $userNombre; 
echo $userid;  
//return $usserNombre, $userid;
//}
?>

