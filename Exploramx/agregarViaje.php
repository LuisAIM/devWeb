<?php
$nombreViaje = $_POST ['nombreViaje'];
$nombreOrigen = $_POST ['nombreOrigen'];
$nombreDestino = $_POST ['nombreDestino'];
$nombrePaquete = $_POST ['nombrePaquete'];
$nombreHotel = $_POST ['nombreHotel'];


$insertarViaje = 'insert into viaje (nombre, origen, destino, id_paquete, id_hotel) values ("' .$nombreViaje. '", "' .$nombreOrigen. '", "' .$nombreDestino. '", ' .$nombrePaquete. ', "'.$nombreHotel.'")';

echo $insertarViaje;

include('conexion.php');
mysqli_query($conexion, $insertarViaje)
	or die ("Error al insertar.");
header ("Location: agregar.php");
?>