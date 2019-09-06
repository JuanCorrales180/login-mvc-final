<?php 

session_start();
if(isset($_SESSION['validacion']) && $_SESSION['validacion'] == 1)
{

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Agregar Deseos</title>
 	<link rel="stylesheet" type="text/css" href="">
 </head>
 <body>
 	<center>
 		<a href="menu.php" class="uno">Volver...</a>
 		<div class="delete">
 			<form name="eliminar">
 				<h3 class="title">¿Que deseo quieres eliminar?</h3>
 				<p >Titulo del deseo</p>
 				<input type="text"  id="jax" name="title">
 				<p id="mensaje" style="color:red"></p>
 				<table>
 					<td><button type="button" class="uno" id="eliminar">Eliminar Deseo</button></td>
 					<td><input type="reset" value="Limpiar" class="uno"></td>
 				</table>
 				
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
	echo "Debes iniciar sesion antes de acceder a esta pagina";
}
  ?>