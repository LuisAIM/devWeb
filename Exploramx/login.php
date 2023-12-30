<!DOCTYPE html>
<html>
	<head>
		<title>ExploraMX</title>
		<link rel="shortcut icon" href="img/logo.jpg">
		<meta charset="utf-8">
		<!-- CSS -->		
		<style>
			@import url("css/estilo.css");
		</style>
	</head>
	<body>
		<header id="cabecera">
			<div id="seccionSesion">
				<table  width="100%">
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
				<td width="95%" height="100%" valign="center"><!--Area de información-->
									<?php
										if(isset($_GET["error"]))
										{
											if($_GET["error"]=="1")
											{
												echo "Error en nombre de usuario o contrasenia";
											}
										}
									?>				
					<table width="100%" height="100%">
						<tr>
							<td width="30%">
							</td>
							<td width="40%">
								<div id="central">
									<div id="login">
										<div class="titulo">
											Bienvenido
										</div>
										<p> </p>
					
									
										<form id="loginform" action = "inicioSesion.php" method = "post">
											<input type="text" name = "usuario" id = "usuario" placeholder="Usuario" required>											
											<input type="password" placeholder="Contraseña" name = "contrasena" id = "contrasena" required>										
											<button type="submit" title="Ingresar" name="Ingresar">Login</button>
										</form>
										<div class="pie-form">
											<a href="#">¿Perdiste tu contraseña?</a>
											<a href="agregarUsuarios.php">¿No tienes Cuenta? Registrate</a>
										</div>
									</div>
									<div class="inferior">
										<a href="index.php">Volver</a>
									</div>
								</div>
							</td>
							<td width="30%">
							</td>
						</tr>
					</table>				
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