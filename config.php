<?php

include("configServer.php");
$db = new mysqli($sqlServer, $user, $password, $database);

if($db->connect_errno > 0){
  die('Unable to connect to database [' . $db->connect_error . ']');
}

?>
