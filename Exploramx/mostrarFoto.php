<?php
$id_foto=$_GET["id_foto"];
$consulta="select imagen, mime from foto where ". "id_foto= " . $id_foto;
include("conexion.php");
$resultado=mysqli_query($conexion,$consulta);
if($filafoto=mysqli_fetch_array($resultado))
{
	header("Content-type:" . $filafoto[1]);
	echo $filafoto[0];
}
else
{
	echo "";
}
?>