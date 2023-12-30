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
include ("conexion.php");
$consulta="select * from viaje where id_viaje= " . $id_viaje;
$resultado= mysqli_query ($conexion, $consulta) 
	or die ("Error al recuperar paquete");
if (!$filaViaje=mysqli_fetch_array($resultado))
{
	header("Location: agregarViaje.php");
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
				document.getElementById('errorNombreViaje').innerHTML="";
				document.getElementById('errorNombreOrigen').innerHTML = "";
				document.getElementById('errorNombreDestino').innerHTML = "";
				document.getElementById('errorFecha').innerHTML = "";
				document.getElementById('errorNombrePaquete').innerHTML = "";
				document.getElementById('nombreHotel').innerHTML = "";
					errores=false;
					if( form.nombreViaje.value=="")
					{
							errores=true;
							document.getElementById('errorNombreViaje').
							innerHTML = "Falta nombre del viaje";
					}				
					if( form.nombreOrigen.value=="")
					{
						errores=true;
						document.getElementById('errorNombreOrigen').
						innerHTML = "Falta el nombre del destino";
					}
					if( form.nombreDestino.value=="")
					{
						errores=true;
						document.getElementById('errorNombreDestino').
						innerHTML = "Falta el nombre del destino";
					}
					
					if( form.nombrePaquete.value=="")
					{
						errores=true;
						document.getElementById('errorNombrePaquete').
						innerHTML = "Falta el nombre del paquete";
					}
					
					if( form.nombreHotel.value=="")
					{
						errores=true;
						document.getElementById('errorNombreHotel').
						innerHTML = "Falta el nombre del hotel";
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
					<h1 size="20%">ACTUALIZAR-VIAJES</h1>
					<hr size="4%" ></hr>
					<?php include('menuAgregar.php') ?>	
					<div class="formulario" >
						<h2>Agregar información</h2><br>	
						<br>	
						<br>
						
						<table width="100%">
							<tr>
								<td width="10%">
								</td>
								<td width="10%">
								</td>
								<td>
									<form action="actualizarViajeBD.php" 
										method="post" onsubmit="return validarDatos(this)">
										<input type = "hidden" name = "id_viaje" value = "<?php echo $filaViaje['id_viaje'];?>">
										<table align="top" id="formulario">
										<tr>
											<td><b>Nombre:</b>
											</td>
											<td>
													<input type="text" 
													name="nombreViaje"
													id="nombre"
													value="<?php echo $filaViaje['nombre'];?>"><span id="errorNombreViaje" class="errorCampo"></span>
											</td>
										</tr>
										<tr>
											<td><b>Origen:</b>
											</td>
											<td>
													<input type="text" 
													name="nombreOrigen"
													id="nombreOrigen"
													value="<?php echo $filaViaje['origen'];?>"><span id="errorNombreOrigen" class="errorCampo"></span>
											</td>
										</tr>
										<tr>
											<td><b>Destino:</b>
											</td>
											<td>
													<input type="text" 
													name="nombreDestino"
													id="nombreDestino"
													value="<?php echo $filaViaje['destino'];?>"><span id="errorNombreDestino" class="errorCampo"></span>
											</td>
										</tr>									
										<tr>
											<td><b>Paquete:</b>
											</td>
											<td>		
													<?php
													include('conexion.php');
													$consulta="select * from paquete";
													
													$resultado= mysqli_query($conexion,$consulta) 
													or die ("Error al consultar paquetes");
													
													echo '<select name="nombrePaquete" id="nombrePaquete">';												
													while($filaPaquete=mysqli_fetch_array($resultado)){
																												
														echo '<option value="'.$filaPaquete['id_paquete'].'">'.$filaPaquete['nombre'].'</option>';												
													}
													echo ' </select>';
													?><span id="errorNombrePaquete" class="errorCampo"></span>
													
											</td>
										</tr>
										<tr>
											<td><b>Hotel:</b>
											</td>
											<td>
													<?php
													include('conexion.php');
													$consulta="select * from hotel";
													
													$resultado= mysqli_query($conexion,$consulta) 
													or die ("Error al consultar hoteles");
													
													echo '<select name="nombreHotel" id="nombreHotel">';												
													while($filaHotel=mysqli_fetch_array($resultado)){
																												
														echo '<option value="'.$filaHotel['id_hotel'].'">'.$filaHotel['nombre'].'</option>';												
													}
													echo '</select>';
													?><span id="errorNombreHotel" class="errorCampo"></span>
											</td>
										</tr>								
										<tr>
											<td><br>
											</td>
											<td>
												<input type="reset"
												name="Limpiar"
												id="reset"
												value="Limpiar">
												<input type="submit"
												name="Guardar"
												id="submit"
												value="Guardar Viaje">									
											</td>
										</tr>
										</table>
									<form>
								</td>
								<td width="5%">
								</td>
								<td width="10%">
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