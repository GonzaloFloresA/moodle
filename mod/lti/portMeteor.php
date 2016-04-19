<?php 
/*require_once('../../config.php');
header('Content-type: application/json'); 
//require_once($CFG->libdir.'/adminlib.php');
 //require_once("$CFG->libdir/odslib.class.php");
    //require_once($CFG->dirroot.'/user/profile/lib.php');
global $DB,$USER; 
    isloggedin();	
	$userid=$USER->id;
	$userNombre=$USER->username;
	//$array = array("id"=>$userid, "nombre"=>$userNombre);
 $result = $DB->get_records_sql('SELECT id,username FROM mdl_user WHERE id==$userid AND username == $userNombre');
 echo $result; */
 require_once('../../config.php');
 header('Content-type: application/json'); 
 global $NOTA,$KEY;
  global $USER;   
    $userid=$USER->id;
    $userNombre=$USER->username;
    $userEmail=$USER->email; 


 $data = file_get_contents("http://localhost:3000/api/moodle");
$products = json_decode($data, true);
	
foreach ($products as $product) {
    print_r($product);   
    
  $NOTA=($product['key']);
   print_r($NOTA);

   

$mysqli =  mysql_pconnect("127.0.0.1", "root", "root");
 mysql_select_db('moodle') or die('No se pudo seleccionar la base de datos');
mysql_query("insert into mdl_key (llave) values ('$NOTA')");
 $query = 'SELECT llave FROM mdl_key';
$result = mysql_query($query) or die('Consulta fallida1: ' . mysql_error()); 

 $KEY=$NOTA;
  
}

?>