<?php
$nombreHotel = $_POST ['nombreHotel'];
$domicilioHotel = $_POST ['domicilioHotel'];
$ubicacionHotel = htmlspecialchars ($_POST ['ubicacionHotel']);
$costosHotel = $_POST ['costosHotel'];
$checkinHotel = $_POST ['checkinHotel'];
$serviciosHotel = $_POST ['serviciosHotel'];

$insertaHotel = 'insert into hotel (nombre, domicilio, ubicación, costo, check_in, servicios) values ("' .$nombreHotel. '", "' .$domicilioHotel. '", "' .$ubicacionHotel. '", ' .$costosHotel. ', "'.$checkinHotel.'", "'.$serviciosHotel.'")';

//echo $insertaHotel;

include('conexion.php');
mysqli_query($conexion, $insertaHotel)
	or die ("Error al insertar.");
header ("Location: agregar.php");
?>