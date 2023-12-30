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
$id_paquete=$_GET['id_paquete'];

$borrarPaquete='delete from paquete where id_paquete='. $id_paquete;			
//echo $borrarHotel;

include ('conexion.php');
mysqli_query($conexion,$borrarPaquete)
	or die ("Error al eliminar el paquete.");
header ("Location: conoce.php");
?>