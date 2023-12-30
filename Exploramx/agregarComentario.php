<?php
$nombreComentario = $_POST ['nombreComentario'];
$correoComentario = $_POST ['correoComentario'];
$comentario = $_POST ['comentario'];

$insertarComentario = 'insert into experiencias (nombre, correo, comentario) values ("' .$nombreComentario. '", "' .$correoComentario. '", "' .$comentario.'")';


echo $insertarComentario;

include('conexion.php');
mysqli_query($conexion, $insertarComentario)
	or die ("Error al insertar.");
header ("Location: agregar.php");
?>