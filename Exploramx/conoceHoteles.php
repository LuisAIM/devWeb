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
					if( form.consultaHoteles.value=="")
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
					<h1 size="20%">CONOCE-HOTELES</h1>
					<hr size="4%" ></hr>
					<?php include('menuConoce.php') ?>	
					<div class="formulario">
						<h2>Buscar Hoteles</h2><!--area de la información de la pagina-->			
						<br>	
						<br>
							<table width="100%">
								<tr>									
									<td>
										<form action="conoceHoteles.php" method="get" onsubmit="return validarDatos(this)">
											<b>Consulta:</b>
											<input type="text" name="consultaHotel"
											id="consultaViajes">
											<input type="submit" name="buscarViajes"
											id="submit" value="Buscar"><span id="errorConsulta" class="errorCampo"></span>				
										</form>
										<br>
										<table width="100%" border="1px" id="tablaResultado">
											<tr>
												<td width="20%">Nombre</td>
												<td width="10%">Domicilio</td>
												<td width="20%">Costo</td>
												<td width="30%">Fotos</td>
												<td width="10%">Servicios</td>
												<td width="10%">Editar</td>
											</tr>
											<?php
												include('conexion.php');
												$consulta="select * from hotel";
												if(isset($_GET['consultaHotel'])){
													$consulta=$consulta . 
													" where  nombre like '%" . $_GET['consultaHotel'] . "%'";		
													
												}
												$resultado= mysqli_query($conexion,$consulta) 
													or die ("Error al consultar hoteles");
												while($filaHotel=mysqli_fetch_array(
												$resultado)){
													echo '<tr vialign="top">';
														echo '<td>' . $filaHotel['nombre'] . '</td>';
														echo '<td>' . $filaHotel['domicilio'] . 
														'<br> '. htmlspecialchars_decode($filaHotel['ubicación']) . '
														</td>';
														echo '<td>' . $filaHotel['costo'] . '</td>';
														echo '<td>';
														$consultaFotos="select * from foto ".
															"where id_hotel= " . $filaHotel['id_hotel'];
														
														$resultadoFoto=mysqli_query($conexion, $consultaFotos)
															or die ("Error al consultar foto");
														while($filafoto=mysqli_fetch_array($resultadoFoto)){
															echo"<a href='mostrarFoto.php?id_foto=" .
																$filafoto['id_foto'] . "'>";								
															echo"<img src='mostrarFoto.php?id_foto=" .
																$filafoto['id_foto'] . " 'height='50px'>";
															echo "</a>";
														}
														echo '</td>';
														echo '<td>';
														echo '</td>';
														echo '<td>';
														echo  '<a href = "actualizarHotel.php?id_hotel=' . $filaHotel ['id_hotel']. '"> Actualizar </a><br>';
														echo '<a href = "borrarHotel.php?id_hotel='.$filaHotel['id_hotel']. '">Borrar </a></td>';
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