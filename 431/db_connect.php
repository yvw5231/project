<?php
//**************************connect to the database
include_once("global.php");
$session = mysql_connect($server, $user, $password);
mysql_select_db($dbName);
?>