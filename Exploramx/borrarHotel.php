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
$id_hotel=$_GET['id_hotel'];

$borrarHotel='delete from hotel where id_hotel='. $id_hotel;			
//echo $borrarHotel;

include ('conexion.php');
mysqli_query($conexion,$borrarHotel)
	or die ("Error al eliminar el hotel.");
header ("Location: conoce.php");
?>