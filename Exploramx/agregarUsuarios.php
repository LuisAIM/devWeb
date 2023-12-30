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
				document.getElementById('errorNombreUsuario').innerHTML="";
				document.getElementById('errorApellidoPatUsuario').innerHTML = "";
				document.getElementById('errorApellidoMatUsuario').innerHTML = "";
				document.getElementById('errorCorreoUsuario').innerHTML = "";
				document.getElementById('errorUsuario').innerHTML = "";
				document.getElementById('errorContrasena').innerHTML = "";
					errores=false;
					if( form.nombreUsuario.value=="")
					{
							errores=true;
							document.getElementById('errorNombreUsuario').
							innerHTML = "Falta nombre del usuario";
					}				
					if( form.apellidoPatUsuario.value=="")
					{
						errores=true;
						document.getElementById('errorApellidoPatUsuario').
						innerHTML = "Falta el apellido paterno del usuario";
					}
					if( form.apellidoMatUsuario.value=="")
					{
						errores=true;
						document.getElementById('errorApellidoMatUsuario').
						innerHTML = "Falta el apellido materno del usuario";
					}
					if (form.correoUsuario.value=="")
					{
						errores=true;
						document.getElementById('errorCorreoUsuario').
						innerHTML = "Falta el correo del usuario";
					}
					if( form.usuario.value=="")
					{
						errores=true;
						document.getElementById('errorUsuario').
						innerHTML = "Falta el nickname del usuario";
					}
					
					if( form.contrasena.value=="")
					{
						errores=true;
						document.getElementById('errorContrasena').
						innerHTML = "Falta la contraseña del usuario";
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
		<table >
			<tr height="90%" >		
				<td width="10%" height="100%" valign="top">
					<img src="img/bannerpaisaje.jpeg" width="100%" height="100%" >
				</td>
				<td width="95%" height="100%" valign="top"><!--Area de información-->	
					<h1 size="20%">AGREGAR-USUARIOS</h1>
					<hr size="4%" ></hr>
					<?php include('menuAgregar.php') ?>		
					<div class="formulario">
						<h2>Agregar información</h2>
						<br>	
						<br>
						<table width="100%">
							<tr>
								<td width="10%">
								</td>
								<td width="10%">
								</td>
								<td>
									<form action="agregarUsuario.php" 
									method="post" onsubmit="return validarDatos(this)">
										<table align="top" id="formulario">
											<tr>
												<td><b>Nombre:</b>
												</td>
												<td>
														<input type="text" 
														name="nombreUsuario"
														id="nombreUsuario"><span id="errorNombreUsuario" class="errorCampo"></span>
												</td>
											</tr>
											<tr>
												<td><b>Apellido Paterno:</b>
												</td>
												<td>
														<input type="text" 
														name="apellidoPatUsuario"
														id="apellidoPatUsuario"><span id="errorApellidoPatUsuario" class="errorCampo"></span>
												</td>
											</tr>
											<tr>
												<td><b>Apellido Materno:</b>
												</td>
												<td>
														<input type="text" 
														name="apellidoMatUsuario"
														id="apellidoMatUsuario"><span id="errorApellidoMatUsuario" class="errorCampo"></span>
												</td>
											</tr>
											<tr>
												<td><b>Correo Electronico:</b>
												</td>
												<td>
														<input type="text" 
														name="correoUsuario"
														id="correoUsuario"><span id="errorCorreoUsuario" class="errorCampo"></span>
												</td>
											</tr>
											<tr>
												<td><b>Nickname:</b>
												</td>
												<td>
														<input type="text" 
														name="usuario"
														id="usuario"><span id="errorUsuario" class="errorCampo"></span>
												</td>
											</tr>
											<tr>
												<td><b>Contraseña:</b>
												</td>
												<td>
														<input type="password" 
														name="contrasena"
														id="contrasena"><span id="errorContrasena" class="errorCampo"></span>
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
													value="Guardar Usuario">									
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