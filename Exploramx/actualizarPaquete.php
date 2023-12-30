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
include ("conexion.php");
$consulta="select * from paquete where id_paquete=" . $id_paquete;
$resultado= mysqli_query ($conexion, $consulta) 
	or die ("Error al recuperar paquete");
if (!$filaPaquete=mysqli_fetch_array($resultado))
{
	header("Location: agregPaquetes.php");
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
				document.getElementById('errorNombrePaquete').innerHTML="";
				document.getElementById('errorCheckIn').innerHTML = "";
				document.getElementById('errorCheckOut').innerHTML = "";
				document.getElementById('errorCantidadHuespedes').innerHTML = "";
				document.getElementById('errorCantidadHuespedes').innerHTML = "";					
					errores=false;
					if( form.nombrePaquete.value=="")
					{
							errores=true;
							document.getElementById('errorNombrePaquete').
							innerHTML = "Falta nombre del paquete";
					}				
					if( form.checkIn.value=="")
					{
						errores=true;
						document.getElementById('errorCheckIn').
						innerHTML = "Falta la fecha de Check-In";
					}
					if( form.checkOut.value=="")
					{
						errores=true;
						document.getElementById('errorCheckOut').
						innerHTML = "Falta la fecha de Check-Out";
					}
					if( form.cantidadHuespedes.value=="" || isNaN(form.cantidadHuespedes.value))
					{
						errores=true;
						document.getElementById('errorCantidadHuespedes').
						innerHTML = "Falta la cantidad de huespedes o valor erroneo";
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
					<h1 size="20%">ACTUALIZAR-PAQUETES</h1>
					<hr size="4%" ></hr>
					<?php include('menuAgregar.php') ?>	
					<div class="formulario">
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
									<form action="actualizarPaqueteBD.php" 
										method="post" onsubmit="return validarDatos(this)">
										<input type = "hidden" name = "id_paquete" value = "<?php echo $filaPaquete['id_paquete'];?>">
										<table align="top" id="formulario">
										<tr>
											<td><b>Nombre:</b>
											</td>
											<td>
													<input type="text" 
													name="nombrePaquete"
													id="nombrePaquete"
													value="<?php echo $filaPaquete['nombre'];?>"><span id="errorNombrePaquete" class="errorCampo"></span>
											</td>
										</tr>
										<tr>
											<td><b>Check-In:</b>
											</td>
											<td>
													<input type="date" 
													name="checkIn"
													id="checkIn"
													value="<?php echo $filaPaquete['check_in'];?>"><span id="errorCheckIn" class="errorCampo"></span>
											</td>
										</tr>
										<tr>
											<td><b>Check-Out:</b>
											</td>
											<td>
													<input type="date" 
													name="checkOut"
													id="checkOut"
													value="<?php echo $filaPaquete['check_out'];?>"><span id="errorCheckOut" class="errorCampo"></span>
											</td>
										</tr>
										<tr>
											<td><b>Huespedes:</b>
											</td>
											<td>
													<input type="text" 
													name="cantidadHuespedes"
													id="cantidadHuespedes"
													value="<?php echo $filaPaquete['huespedes'];?>"><span id="errorCantidadHuespedes" class="errorCampo"></span>
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
													value="Guardar Paquete">									
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