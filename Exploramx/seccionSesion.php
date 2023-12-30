<table  width="100%" >
					<tr>
						<td width="10%">
							<span id="seccionNombre1">Exp</span><span id="seccionNombre2">lor</span><span id="seccionNombre3">aMX</span>
						</td >
						<td width="75%">
						</td>
						<td width="7.5%" id="botonSesion" class="borde">
							<a href="login.php">Iniciar Sesión</a>	
						</td>
						<td width="7.5%" id="botonRegistrarse" class="borde">
							<?php
								if(session_id()==""){
									session_start();
								}	
								if(isset($_SESSION['usuario'])){
									if($_SESSION['usuario'] != ""){
										echo "Hola " . $_SESSION['usuario'] . ' ';
										echo "<br>";
										echo "<a href='cerrarSesion.php'>Cerrar Sesion</a>";
									}
								}else{
									
									echo "<a href='login.php'>Iniciar Sesion</a>";
								}
							?>	
						</td>
					</tr>
</table>