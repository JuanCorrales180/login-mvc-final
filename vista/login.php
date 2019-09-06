<?php 
	session_start();
	session_destroy();
 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Inicio</title>
 	<link rel="stylesheet" type="text/css" href="css/login.php">
 </head>
 <body>
 	<section id="formulario">
 		<center>
 			<h1>Inicio</h1>
 			<br><br>
 			<div class="login">
 				<form action="../controlador/login.php" method="POST">
 					<fieldset>
 						<legend>Login</legend>
 						<p>
 							<input type="text" class="correo" placeholder="Usuario" title="Se necesita usuario" required>
 						</p>
 						<p>
 							<input type="password" class="clave" placeholder="contraseña" title="Se necesita una contraseña" required>
 						</p>
 						<p>
 							<button type="button" id="envia">Entrar</button>
 							<input type="reset" value="Limpiar">
 						</p>

 						<p id="mensaje" style="color:red;"></p>
 						<p>
 							<a href="crear.php">
 								Crear Cuenta
 							</a>
 						</p>
 					</fieldset>
 					
 				</form>
 				
 			</div>
 		</center>
 	</section>
 	
 	<script type="text/javascript" src="../js/jquery.js"></script>
 	<script type="text/javascript" src="../js/operaciones.js"></script>
 </body>

 </html>