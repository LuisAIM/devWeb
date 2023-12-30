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

$imagen="";
$tipoarchivo="";

if($_FILES["foto"]["tmp_name"] != "")
{
	if(!preg_match("/^image/", $_FILES["foto"]["type"]))
	{
		echo "<b> El archivo no es una imagen. </b>";
		exit();
	}
	else 
	{
		$archivo_temporal=$_FILES["foto"]["tmp_name"];
		$fl=fopen($archivo_temporal,"rb");
		$foto_size=$_FILES["foto"]["size"];
		$imagen=fread($fl,$foto_size);
		$imagen=addslashes($imagen);
		$tipoarchivo=$_FILES["foto"]["type"];
	}
}

include("conexion.php");
$consulta="insert into foto (id_hotel, imagen, mime)" . "values (". $id_hotel.", '". $imagen ."', '". $tipoarchivo ."')";
//echo $consulta;
mysqli_query($conexion, $consulta)
	or die("Error al insertar foto");
header("Location: actualizarHotel.php?id_hotel=" . $id_hotel);
?>