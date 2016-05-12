<?php
session_start();
$_SESSION['token'] = md5(session_id() . time());
$token = $_SESSION['token'];
include_once('welcome.php');
?>
