<?php
$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'way2newsms';
mysql_connect($server,$user,$pass) or die("Server Not Fould");
mysql_select_db($db) or die("Database Not Found");
?>