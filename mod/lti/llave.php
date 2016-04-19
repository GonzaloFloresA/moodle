  <?php
require_once('../../config.php');
 header('Content-type: application/json'); 
   
isloggedin();
    global $USER;
    global $KEY,$userid1,$userNombre1;   
    global $userEmail; 
  
$mysqli =  mysql_pconnect("127.0.0.1", "root", "root");
 mysql_select_db('moodle') or die('No se pudo seleccionar la base de datos');

 $query = 'SELECT llave  FROM mdl_key';
$result = mysql_query($query) or die('Consulta fallida1: ' . mysql_error()); 
  
$fila = mysql_fetch_assoc($result);
 $userid1=$USER->id;
 $userNombre1=$USER->username;
 $email=$USER->email;
  $var=$fila['llave'];
  $array = array("llave"=>$var,"email"=>$email, "nombre"=>$userNombre1 );   
    echo json_encode($array); 
    
 ?>

 