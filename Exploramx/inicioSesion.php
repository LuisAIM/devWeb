<?php

session_start();
$usuario=$_POST["usuario"];
$contrasena=$_POST["contrasena"];

$consultaUsuario= "select * from usuario where " . 
"nickname= '" . $usuario."' and password='" . $contrasena."'";

include("conexion.php");
$resultado=mysqli_query($conexion, $consultaUsuario) or
	die ("Error al consultar usuario");
if($filaUsuario=mysqli_fetch_array($resultado))
{
	echo "si existe";
	$_SESSION['usuario']=$filaUsuario['nickname'];
	$_SESSION['nombre']=$filaUsuario['nombre'];
	header("Location: index.php");
}
else 
{
	echo "no existe";
	$_SESSION['usuario']="";
	$_SESSION['nombre']="";
	session_destroy();
	header("Location: login.php?error=1");
}
?>