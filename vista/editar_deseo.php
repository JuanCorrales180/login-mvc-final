<?php 

session_start();
if(isset($_SESSION['validacion']) && $_SESSION['validacion'] == 1)
{


 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>
 		Editar deseo
 	</title>
 	<link rel="stylesheet" type="text/css" href="">
 </head>
 <body>
 	<center>
 		<a href="menu.php" class="uno">Volver...</a>
 		<div class="maik">
 			<form name="editar">
 				<h3 class="title" >Edita tu Deseo...</h3>
 				<p>Titulo Del Deseo</p>
 				<input type="text" name="title" id="jinx" title="Se necesita titulo del deseo" required>
 				<div>
 					<textarea name="deseo" rows="14" cols="50" id="area" title="Ingresa el deseo" required></textarea>
 				</div>
 				<p id="mensaje" style="color: blue;"></p>
 				<button type="button" id="actualizar" class="uno">Actualizar Deseo</button>
 				<input type="reset" value="Limpiar" class="uno">
 			</form>
 		</div>
 		 	<script type="text/javascript" src="../js/jquery.js"></script>
 			<script type="text/javascript" src="../js/operaciones.js"></script>
 	</center>
 </body>
 </html>

 <?php 
}
else
{
	echo "Debes iniciar session antes de acceder a esta pagina";
}

  ?>