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
					<h1 size="20%">AGREGAR-HOTELES</h1>
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
							
										<form action="agregarHotel.php" 
										method="post" onsubmit="return validarDatos(this)">
											<table>
												<tr>
												<td>Nombre:
												</td>
												<td>
														<input type="text" 
														name="nombreHotel"
														id="nombreHotel"><span id="errorNombre" class="errorCampo"></span>
													</td>
												</tr>
												<tr>
													<td>Docimicilio:
													</td>
													<td>
														<input type="text" 
														name="domicilioHotel"
														id="domicilioHotel"><span id="errorDomicilio" class="errorCampo"></span>
													</td>
												</tr>
												<tr>
													<td>Ubicación:
													</td>
													<td>
														<input type="text" 
														name="ubicacionHotel"
														id="ubicacionHotel"><span id="errorUbicacion" class="errorCampo"></span>
													</td>
												</tr>
												<tr>
													<td>Costos:
													</td>
													<td>
														<input type="text" 
														name="costosHotel"
														id="costosHotel"><span id="errorCostos" class="errorCampo"></span>
													</td>
												</tr>
												<tr>
													<td>Check-in:
													</td>
													<td>
														<input type="text"
														name="checkinHotel"
														id="checkinHotel"><span id="errorCheckin" class="errorCampo"></span>
													</td>
												</tr>
												<tr>
													<td>Servicios:
													</td>
													<td>
														<textarea name="serviciosHotel"
														id=""
														rows="5" cols="30"
														></textarea><span id="errorServicios" class="errorCampo"></span>							
													</td>
												</tr>
												<tr>
													<td>
													</td>
													<td>
														<input type="reset"
														name="Limpiar"
														id="reset"
														value="Limpiar">
														<input type="submit"
														name="enviar"
														id="submit"
														value="Guardar hotel">									
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