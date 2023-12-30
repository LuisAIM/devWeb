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
$id_viaje=$_POST['id_viaje'];
$nombreViaje = $_POST ['nombreViaje'];
$nombreOrigen = $_POST ['nombreOrigen'];
$nombreDestino = $_POST ['nombreDestino'];
$nombrePaquete = $_POST ['nombrePaquete'];
$nombreHotel = $_POST ['nombreHotel'];
echo 'estes es el id de viaje:   ' . $id_viaje;


$consulta="update viaje " . "set " . "nombre = '" . $nombreViaje . "', "  .  
		  "origen = '" . $nombreOrigen . "'," .
		  "destino = '" . $nombreDestino . "'," .
		  "id_hotel = '" . $nombreHotel . "'," .
		  "id_paquete = '" . $nombrePaquete . "' " .	  
		  "where " . "id_viaje= " . $id_viaje;
		 
echo $consulta;
include("conexion.php");
mysqli_query($conexion, $consulta)
 or die ("Error al actualizar el viaje");

header("Location: actualizarViaje.php?id_viaje=" . $id_viaje);
?>