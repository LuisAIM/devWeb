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
				document.getElementById('errorNombre').innerHTML="";
				document.getElementById('errorCorreo').innerHTML = "";
				document.getElementById('errorComentario').innerHTML = "";
				errores=false;
				
					if( form.nombreComentario.value=="")
					{
							errores=true;
							document.getElementById('errorNombre').
							innerHTML = "Falta nombre del usuario";
					}				
					if( form.correoComentario.value=="")
					{
						errores=true;
						document.getElementById('errorCorreo').
						innerHTML = "Falta el correo del usuario";
					}
					if( form.comentario.value=="")
					{
						errores=true;
						document.getElementById('errorComentario').
						innerHTML = "Falta el comentario";
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
					<h1 size="20%">EXPERIENCIAS</h1>
					<hr size="4%" ></hr>
					<div class="formulario" >
						<h2>Deja tus comentarios</h2>
						<br>
						<br>
						<table width="100%">
							<tr>
								<td width="10%">
								</td>
								<td width="10%">
								</td>
								<td>
									<form action="agregarComentario.php" 
										method="post" onsubmit="return validarDatos(this)">
										<table align="top" id="formulario">
											<tr>
												<td><b>Nombre:</b>
												</td>
												<td>
													<input type="text" 
													name="nombreComentario"
													id="nombreComentario"><span id="errorNombre" class="errorCampo"></span>
												</td>
											</tr>
											<tr>
												<td><b>Correo Electronico:</b>
												</td>
												<td>
													<input type="text" 
													name="correoComentario"
													id="correoComentario"><span id="errorCorreo" class="errorCampo"></span>
												</td>
											</tr>
											<tr>
												<td><b>Comentarios:</b>
												</td>
												<td>
													<textarea name="comentario" 
													id="comentario"
													rows="5" cols="30"
													></textarea><span  id="errorComentario" class="errorCampo"></span>							
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
													value="Enviar comentario">									
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