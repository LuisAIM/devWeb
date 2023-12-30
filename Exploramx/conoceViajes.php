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
					if( form.consultaViajes.value=="")
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
					<h1 size="20%">CONOCE-VIAJES</h1>
					<hr size="4%" ></hr>
					<?php include('menuConoce.php') ?>	
					<div class="formulario">
							<h2>Buscar Viajes</h2><!--area de la información de la pagina-->
							<br>	
							<br>
							<table width="100%">
								<tr>									
									<td>
										<form action="conoceViajes.php" method="get" onsubmit="return validarDatos(this)">
											<b>Consulta:</b>
											<input type="text" name="consultaViajes"
											id="consultaViajes">
											<input type="submit" name="buscarViajes"
											id="submit" value="Buscar"><span id="errorConsulta" class="errorCampo"></span>			
										</form>
										<br>
										<table width="100%" border="1px" id="tablaResultado">
											<tr>
												<td width="20%">Nombre</td>
												<td width="20%">Destino</td>
												<td width="20%">Origen</td>												
												<td width="25%">Paquete</td>												
												<td width="25%">Hotel</td>
												<td width="10%">Editar</td>
											</tr>
											<?php
												include('conexion.php');
												$consulta="select * from viaje";
												if(isset($_GET['consultaViajes'])){
													$consulta=$consulta . 
													" where  nombre like '%" . $_GET['consultaViajes'] . "%'";															
												}
												$resultado= mysqli_query($conexion,$consulta) 
													or die ("Error al consultar viajes");
												while($filaViaje=mysqli_fetch_array(
												$resultado)){
													echo '<tr vialign="top">';
														echo '<td>' . $filaViaje['nombre'] . '</td>';
														echo '<td>' . $filaViaje['destino'].'</td>';
														echo '<td>' . $filaViaje['origen'] . '</td>';
																											
														$consultaPaquetes="select * from paquete ".
															"where id_paquete= " . $filaViaje['id_paquete'];
														$resultadoPaquete=mysqli_query($conexion, $consultaPaquetes)
															or die ("Error al consultar el paquete");
															$filaPaquete=mysqli_fetch_array($resultadoPaquete);
															{
															echo '<td>' . $filaPaquete['nombre']. '</td>';
															}
															
														$consultaHoteles="select * from hotel ".
															"where id_hotel= " . $filaViaje['id_hotel'];
														$resultadoHotel=mysqli_query($conexion, $consultaHoteles)													
															or die ("Error al consultar el hotel");
															$filaHotel=mysqli_fetch_array($resultadoHotel);
															{
															echo '<td>' . $filaHotel['nombre'] . '</td>';																												
															}
														echo '<td>';
														echo  '<a href = "actualizarViaje.php?id_viaje=' . $filaViaje ['id_viaje']. '"> Actualizar </a><br>';													
														echo '<a href = "borrarViaje.php?id_viaje='.$filaViaje['id_viaje']. '">Borrar </a></td>';
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