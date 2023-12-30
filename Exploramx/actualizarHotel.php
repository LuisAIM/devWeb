
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
$id_hotel=$_GET['id_hotel'];
include ("conexion.php");
$consulta="select * from hotel where id_hotel=" . $id_hotel;
$resultado= mysqli_query ($conexion, $consulta) 
	or die ("Error al recuperar Hotel");
if (!$filahotel=mysqli_fetch_array($resultado))
{
	header("Location: agregar.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>ExploraMX</title>
		<link rel="shortcut icon" href="img/logo.jpg">
		<meta charset="utf-8">
		<style>
			@import url("css/estilo.css");
		</style>
		<script>
		
			function validarDatos(form){
				document.getElementById('errorNombreHotel').innerHTML="";
				document.getElementById('errorDomicilioHotel').innerHTML = "";
				document.getElementById('errorFotosHotel').innerHTML = "";
				document.getElementById('errorServiciosHotel').innerHTML = "";				
					errores=false;
					if( form.nombreHotel.value=="")
					{
							errores=true;
							document.getElementById('errorNombreHotel').
							innerHTML = "Falta nombre del hotel";
					}				
					if( form.domicilioHotel.value=="")
					{
						errores=true;
						document.getElementById('errorDomicilioHotel').
						innerHTML = "Falta el apellido paterno del usuario";
					}
					if( form.fotosHotel.value=="")
					{
						errores=true;
						document.getElementById('errorFotosHotel').
						innerHTML = "No se ha adjuntado ningun archivo";
					}
					if (form.serviciosHotel.value=="")
					{
						errores=true;
						document.getElementById('errorServiciosHotel').
						innerHTML = "Falta los servicios del hotel";
					}					
				return !errores;
			}
		</script>
	</head>
	<body>
		<header id="cabecera">		
			<div id="seccionSesion">
				<table  width="100%" >
					<tr>
						<td>
							<?php include('seccionSesion.php') ?>
						</td>
					</tr>
				</table>
			</div>
			<div id="seccionMenu">
			<table width="100%" height="10%" > 		
				<tr height="10%">
					<td width="10%">
						<div align="center">
							<img src="img/logo.jpg" width="50%">
						</div>
						
					</td>
					<td width="90%"> 					
						<?php include('menu.php') ?>
					</td>
				</tr>					
			</table>
			</div>
		</header>
		<table>
			<tr height="90%">		
				<td width="10%" height="100%" valign="top">
					<img src="img/bannerpaisaje.jpeg" width="100%" height="100%" >
				</td>
				<td width="95%" height="100%" valign="top"><!--Area de información-->	
					<h1 size="20%">ACTUALIZAR-HOTELES</h1>
					<hr size="4%" ></hr>
					<?php include('menuAgregar.php') ?>	
					<div class="formulario">
						<h2>Agregar información</h2><br>	
							<br>
							<br>
							<table width="100%">
								<tr>
									<td width="5%">
									</td>
									<td width="5%">
									</td>
									<td>
							
										<p> </p>
					
											<form action = "actualizarHotelBD.php" method = 
											"post" onsubmit ="return validarDatos(this)">
											
												<input type = "hidden" name = "id_hotel" value = "<?php echo $filahotel['id_hotel'];?>">
												
												<table>
													
													<tr>
														<td> Nombre:
														</td>
														<td>
															<input type = "text" name = "nombreHotel" 
															id = "nombreHotel" value="<?php echo $filahotel['nombre'];?>"> <span id = "errorNombre" class = "errorCampo"> </span>
														</td>
													</tr>
													
													<tr>
														<td> Domicilio: </td>
														<td>
															<input type = "text" name = "domicilioHotel" 
															id = "domicilioHotel" value="<?php echo $filahotel['domicilio'];?>"> <span id = "errorDomicilio" class = "errorCampo">  </span>
														</td>
													</tr>
													
													<tr>
														<td> Ubicacion: </td>
														
														<td>
															<input type = "text" name = "ubicacionHotel"
															id = "ubicacionHotel" value="<?php echo $filahotel['ubicación'];?>"> <span id = "errorUbicacion" class = "errorCampo"> </span>
														</td>
													</tr>
													
													<tr>
														<td> Costos: </td>
														
														<td>
															<input type = "text" name = "costosHotel"
															id = "costosHotel" value="<?php echo $filahotel['costo'];?>"> <span id = "errorCostos" class = "errorCampo"> </span>
														</td>
													</tr>
													
													<tr>
														<td> Check-In: </td>
														
														<td>
															<input type = "text" name = "checkinHotel" 
															id = "checkinHotel" value="<?php echo $filahotel['check_in'];?>"> <span id = "errorCheckin" class = "errorCampo"> </span>
														</td>
													</tr>
													
													<tr>
														<td> Servicios: </td>
														
														<td>
															<textarea name = "serviciosHotel" id = "serviciosHotel" rows = "5" 
															cols = "30"><?php echo $filahotel['servicios'];?></textarea><span id = "errorServicios" class = "errorCampo"></span>
														</td>
													</tr>
													
													<tr>
														<td>
														</td>
														
														<td>
															<input type = "reset" name = "limpiar" id = "limpiar" value = "Limpiar">
															<input type = "submit" name = "enviar" id = "enviar" value = "Guardar">
														</td>
													</tr>
													
												</table>
												
											</form>
											
											<form action = "agregarFoto.php" method = "post" enctype = "multipart/form-data">
												
												<input type = "hidden" name = "id_hotel" value = "<?php echo $filahotel['id_hotel'];?>">
												
												<table>
													<tr>
														<td>Archivo</td>
														<td>
															<input type = "file" name = "foto" accept = "image/x-png,image/gif,image/jpeg">
														</td>
													</tr>
													
													<tr>
														<td> </td>
														<td>
															<input type = "submit" name = "enviar" value = "Guardar foto">
														</td>
													</tr>
												</table>
											
											</form>
									</td>
									<td width="5%">
									</td>
									<td width="5%">
									</td>
								</tr>
							</table>
					</div>					
				</td>
			</tr>
		</table>
		<hr size="6%"></hr>
		<table width="100%" height="100%">
			<tr>
				<td>
					<?php include('piePagina.php') ?>
				</td>
			</tr>
		<table>
	</body>
</html>