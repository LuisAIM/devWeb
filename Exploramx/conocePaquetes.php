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
				document.getElementById('errorConsulta').innerHTML="";			
					errores=false;
					if( form.consultaPaquetes.value=="")
					{
							errores=true;
							document.getElementById('errorConsulta').
							innerHTML = "Falta la información de la busqueda";
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
					<h1 size="20%">CONOCE-PAQUETES</h1>
					<hr size="4%" ></hr>
					<?php include('menuConoce.php') ?>	
					<div class="formulario">
						<h2>Buscar Paquetes</h2><!--area de la información de la pagina-->			
						<br>	
							<br>
							<table width="100%">
								<tr>									
									<td>
										<form action="conocePaquetes.php" method="get" onsubmit="return validarDatos(this)">
											<b>consulta:</b>
											<input type="text" name="consultaPaquetes"
											id="consultaPaquetes">
											<input type="submit" name="buscarPaquetes"
											id="submit" value="Buscar"><span id="errorConsulta" class="errorCampo"></span>			
										</form>
										<br>
										<table width="100%" border="1px" id="tablaResultado">
											<tr>
												<td width="20%">Nombre</td>
												<td width="20%">Check-In</td>
												<td width="10%">Check-out</td>
												<td width="40%">Cantidad De Huespedes</td>
												<td width="10%">Editar</td>													
											</tr>
											<?php
												include('conexion.php');
												$consulta="select * from paquete";
												if(isset($_GET['consultaPaquetes'])){
													$consulta=$consulta . 
													" where  nombre like '%" . $_GET['consultaPaquetes'] . "%'";															
												}
												$resultado= mysqli_query($conexion,$consulta) 
													or die ("Error al consultar hoteles");
												while($filaPaquete=mysqli_fetch_array(
												$resultado)){
													echo '<tr vialign="top">';
														echo '<td>' . $filaPaquete['nombre'] . '</td>';
														echo '<td>' . $filaPaquete['check_in'].'</td>';
														echo '<td>' . $filaPaquete['check_out'] . '</td>';
														echo '<td>' . $filaPaquete['huespedes'] . '</td>';
														echo '<td>';
														echo  '<a href = "actualizarPaquete.php?id_paquete=' . $filaPaquete ['id_paquete']. '"> Actualizar </a><br>';
														echo '<a href = "borrarPaquete.php?id_paquete='.$filaPaquete['id_paquete']. '">Borrar </a></td>';
													echo '</tr>';
													
												}
											?>	
										</table>
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

