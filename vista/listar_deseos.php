<?php 

session_start();
if (isset($_SESSION['validacion']) && $_SESSION['validacion'] == 1) {
	
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Listar deseo</title>
 </head>
 <body>
 	<center>
 		<a href="menu.php" class="uno">volver...</a>
 		<div class="maik">
 			<h3 class="title">Lista de tus deseos...</h3>
 			<?php 
 				include("../modelo/conexion.php");
 				$wish = new conexion();

 			 ?>
 			 <table id="tabla" border="">
 			 	<tr>
 			 		<th>TITULO</th>
 			 		<th>DESCRIPCION</th>

 			 	</tr>
 			 	<tr>
 			 	
 			 			<?php 
 			 				$data = $wish->listarDeseos();
 			 				print_r($data);
 			 				// while ($row = mysqli_num_rows($data)) 
 			 				// {
 			 				// 	# code...
 			 				// 	print_r($row);
 			 				// }
 			 	 		?>
 			 		
 			 
 			 	
 			 </table>
 		</div>
 	</center>
 </body>
 </html>
 <?php 

}
else
{
	echo "Debes iniciar sesion antes de entrar a esta pagina";
}
  ?>