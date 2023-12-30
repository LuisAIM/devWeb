<?php
	session_start();
	
	if(!isset($_SESSION['usuario']))
	{
		header("Location: iniciarSesion.php");
	}
	if($_SESSION['usuario']!="admin01")
	{
		header("Location: buscar.php");
	}
?>

<?php
$id_hotel=$_POST['id_hotel'];
$nombreHotel = $_POST ['nombreHotel'];
$domicilioHotel = $_POST ['domicilioHotel'];
$ubicacionHotel = htmlspecialchars($_POST ['ubicacionHotel']);
$costosHotel = $_POST ['costosHotel'];
$checkinHotel = $_POST ['checkinHotel'];
$serviciosHotel = $_POST ['serviciosHotel'];

$consulta="update hotel " . "set " . "nombre = '" . $nombreHotel . "', "  .  
		  "domicilio = '" . $domicilioHotel . "'," .
		  "ubicación = '" . $ubicacionHotel . "'," .
		  "costo = '" . $costosHotel . "'," .
		  "check_in = '" . $checkinHotel . "'," .
		  "servicios = '" . $serviciosHotel . "' " .
		  "where " . "id_hotel=" . $id_hotel ;
		 
echo $consulta;
include("conexion.php");
mysqli_query($conexion, $consulta)
 or die ("Error al actualizar hotel");

header("Location: actualizarHotel.php?id_hotel=" . $id_hotel);
?>