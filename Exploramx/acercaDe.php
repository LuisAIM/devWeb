<!DOCTYPE html>
<html>
	<head>
		<title>ExploraMX</title>
		<link rel="shortcut icon" href="img/logo.jpg">
		<meta charset="utf-8">
		<style>
			@import url("css/estilo.css");
		</style>
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
					<h1 size="20%">ACERCA DE</h1>
					<hr size="4%" ></hr>
					<div >
						<h2>Información de la pagina web</h2>
						<br>
						<p>Este es un sitio creado para la materia programación Web como proyecto de la materia, durante el quinto semestre
							de la carrera Ingeneria en Tecnologias de la información y comunicacione del Instituto Tecnologico Del Sur de Nayarit, 
							realizado por el alumno Luis Antonio Ismael Meza Rosales.
						</p>
						<p>
							La aplicación web <b>ExploraMX</b> Pretende mostrar información acerca de los lugares
							turísticos del municipio, hechos históricos relevantes, información acerca de lugares
							de hospedaje, renta de vehículos, restaurantes, sitios donde se pueden encontrar
							artículos típicos de la región (vestimenta, adornos, accesorios, entre otros.), eventos
							diversos a los que se puede acudir (deportivos, culturales, de entretenimiento,
							esparcimiento). En esta página se pretende realizar paquetes que cualquier persona
							pueda consultar y adquirir, ajustándose a alguna agenta en específico relacionada
							con el conocer algunos de los aspectos anteriormente mencionados como las zonas
							repetitivas, costumbres, gastronomía, artículos típicos, entre otros aspectos
							interesantes de la región.
						</p>
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