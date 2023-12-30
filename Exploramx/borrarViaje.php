<?php
	session_start();
	
	if(!isset($_SESSION['usuario']))
	{
		header("Location: iniciarSesion.php");
	}
	if($_SESSION['usuario']!="admin01")
	{
		header("Location: index.php");
	}
?>

<?php
$id_viaje=$_GET['id_viaje'];

$borrarViaje='delete from viaje where id_viaje='. $id_viaje;			
echo $borrarViaje;

include ('conexion.php');
mysqli_query($conexion,$borrarViaje)
	or die ("Error al eliminar el viaje.");
header ("Location: conoce.php");
?>