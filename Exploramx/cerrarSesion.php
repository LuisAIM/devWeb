<?php
	session_start();
	$_SESSION['usuario']="";
	$_SESSION['nombre']="";
	session_destroy();
	header("Location: login.php");
?>