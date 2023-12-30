<?php
$nombrePaquete = $_POST ['nombrePaquete'];
$checkIn = $_POST ['checkIn'];
$checkOut = $_POST ['checkOut'];
$cantidadHuespedes = $_POST ['cantidadHuespedes'];

$insertarPaquete = 'insert into paquete (nombre, check_in, check_out, huespedes) values ("' .$nombrePaquete. '", "' .$checkIn. '", "' .$checkOut. '", "' .$cantidadHuespedes.'")';

echo $insertarPaquete;

include('conexion.php');
mysqli_query($conexion, $insertarPaquete)
	or die ("Error al insertar.");
header ("Location: agregar.php");
?>