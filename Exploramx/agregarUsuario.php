<?php
$nombreUsuario = $_POST ['nombreUsuario'];
$apellidoPatUsuario = $_POST ['apellidoPatUsuario'];
$apellidoMatUsuario = $_POST ['apellidoMatUsuario'];
$correoUsuario = $_POST ['correoUsuario'];
$usuario = $_POST ['usuario'];
$contrasena = $_POST ['contrasena'];

$insertaUsuario = 'insert into usuario (nombre, apPat, apMat, correo, nickname, password) values ("' .$nombreUsuario. '", "' .$apellidoPatUsuario. '", "' .$apellidoMatUsuario. '", "' .$correoUsuario. '", "'.$usuario.'", "'.$contrasena.'")';

echo $insertaUsuario;

include('conexion.php');
mysqli_query($conexion, $insertaUsuario)
	or die ("Error al insertar.");
header ("Location: agregar.php");
?>