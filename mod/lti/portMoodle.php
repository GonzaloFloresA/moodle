
  <?php
require_once('../../config.php');
 header('Content-type: application/json'); 
    global $USER;
    global $KEY;   
    $userid=$USER->id;
    $userNombre=$USER->username;
    $userEmail=$USER->email; 

echo $KEY;
$mysqli =  mysql_pconnect("127.0.0.1", "root", "root");
 mysql_select_db('moodle') or die('No se pudo seleccionar la base de datos');
mysql_query("insert into mdl_sacar (id,nombre,email) values ('$userid','$userNombre','$userEmail')");
 $query = 'SELECT id,nombre,email FROM mdl_sacar';
$result = mysql_query($query) or die('Consulta fallida1: ' . mysql_error()); 
  
$fila = mysql_fetch_assoc($result);
  $var1= $fila['id'] ; 
  $var2= $fila['nombre'] ;
  $var3= $fila['email'] ; 
 // $var4=$fila4['llave'];
  $array = array("id"=>$var1, "nombre"=>$var2,"email"=>$var3 );   
    echo json_encode($array); 
    
 ?>

 
  