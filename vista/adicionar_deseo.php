<?php 

session_start();
if (isset($_SESSION['validacion']) && $_SESSION['validacion'] == 1)  {


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Agregar deseo</title>
 </head>
 <body>
 	<center>
 		<a href="menu.php" class="uno">Volver...</a>
 		<div class="maik">
 			<form name="deseos_agregar">
 				<h3 class="title">Ingresa tu deseo...</h3>
 				<p>Titulo del deseo</p>
 				<input title="Se necesita el titulo del deseo" type="text" id="titulo" required>
 				<div>
 					<textarea name="deseo" rows="14" cols="50" id="area" title="Ingresa el deseo" required></textarea>
 				</div>
 				<p id="mensaje" style="color: red;"></p>
 					<input type="reset" value="Limpiar" class="uno" >
 					<button type="button" id="Agregar" class="uno">Agregar Deseo</button>
 			</form>
 		</div>
 	</center>
 
 	<script type="text/javascript" src="../js/jquery.js"></script>
 	<script type="text/javascript" src="../js/operaciones.js"></script>


 </body>
 </html>

 <?php 

}
else
{
	echo "Debes de iniciar sesion antes de acceder a esta pagina";
}

  ?>