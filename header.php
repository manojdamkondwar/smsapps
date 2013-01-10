<?php
include_once('way2sms-api.php');
include_once('config/connection.php');
include_once('class/register.cls.php');
include_once('class/sendsms.cls.php');
session_start();
if(isset($_REQUEST['log']))
{
	session_destroy();
	header('location:index.php');	
}
if(isset($_REQUEST['login']))
{
	$obj = new userRegister();
	$obj->login();
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License
-->
<html xmlns="http://www.w3.org/1999/xhtml"><head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Way2NewSmS</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="default.css" rel="stylesheet" type="text/css"/>
</head>
<script type="text/javascript" src="js/jquery-1.4.2.js"></script>
<script type="text/javascript" src="js/jquery-latest.js"></script>
<script type="text/javascript" src="js/validation.js"></script>