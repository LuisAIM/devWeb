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
$id_paquete=$_POST['id_paquete'];
$nombrePaquete = $_POST ['nombrePaquete'];
$checkIn = $_POST ['checkIn'];
$checkOut = $_POST ['checkOut'];
$cantidadHuespedes = $_POST ['cantidadHuespedes'];

$consulta="update paquete " . "set " . "nombre = '" . $nombrePaquete . "', "  .  
		  "check_in = '" . $checkIn . "'," .
		  "check_out = '" . $checkOut . "'," .
		  "huespedes = '" . $cantidadHuespedes . "' " .	  
		  "where " . "id_paquete=" . $id_paquete ;
		 
echo $consulta;
include("conexion.php");
mysqli_query($conexion, $consulta)
 or die ("Error al actualizar paquete");

header("Location: actualizarPaquete.php?id_paquete=" . $id_paquete);
?>