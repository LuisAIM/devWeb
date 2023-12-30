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
	<body >
		<header id="cabecera" class="borde">
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
					<h1 size="20%">INICIO</h1>
					<hr size="4%" ></hr>
					<div >
						<h2>Jala, Nayarit</h2>
						<br>
						<p width="70%">
						Jala es una población perteneciente al municipio de Jala, en el Estado de Nayarit.
						Cuenta con 5586 habitantes. Jala se encuentra a 1070 metros sobre el nivel del mar (SNM). 
						Jala es el municipio del estado de Nayarit que cuenta con la más diversa cantidad de monumentos históricos, 
						entre los que destacan: su templo parroquial, 
						edificado en la segunda mitad del siglo XIX y las ruinas del antiguo hospital con su fachada Barroca.
						</p>
						<img src="img/imagenJala.jpg" width="30%">
						<p>
						Caminar por sus calles de forma irregular es introducirse a barrios con sellos característicos, 
						que invitan a contemplar viejas casonas de típica arquitectura y sabor añejo. 
						La Basílica de Jala, joya arquitectónica mezcla de estilos romano y gótico, 
						fue construida con cantera color rosa, verde y amarillo, 
						su primera piedra se colocó en abril de 1856. Existen dos construcciones en ruinas, 
						la primera que fue la iglesia de San Francisco de Asís, edificada en 1674, 
						y la segunda que fue un convento franciscano, clausurado en 1810.
						</p>
						<p>
						Cuenta con grandes atractivos como el volcán del Ceboruco, 
						sus paisajes, los cerros y sus caídas de agua ubicados al norte de la cabecera municipal, 
						donde se observa toda el área urbana. En la localidad hay cuatro templos tradicionales: 
						la basílica lateranense de la Señora de la Asunción; el templo de La Natividad; 
						el templo de San Francisco; y el templo de la comunidad vecina de Jomulco. 
						La cocina local es sin duda una de las razones por las que cada fin de semana acuden visitantes.
						</p>
						<img src="img/tostadaJala.jpg" width="30%">
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