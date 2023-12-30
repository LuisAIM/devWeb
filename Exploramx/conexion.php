<?php
$conexion = new mysqli('192.168.1.67:3306', 'root', '', 'exploramx');

if ($conexion -> connect_error)
{
	die ("Conexion no establecida: " . $conexion -> connect_error);
}
else 
{
	//echo "Conexion exitosa";
}

mysqli_set_charset ($conexion, "utf8");
?>