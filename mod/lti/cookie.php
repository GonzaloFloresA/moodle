<?php 
  session_start(); 
  echo 'session_id(): ' . session_id(); 
  echo "<br />\n"; 
  echo 'session_name(): ' . session_name(); 
  echo "<br />\n"; 
  print_r(session_get_cookie_params()); 
   <a href="1.php?<?=SID?>">Paso variable de sesión por URL</a> 
?>