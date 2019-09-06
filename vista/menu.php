<?php 
session_start();
if(isset($_SESSION['validacion']) && $_SESSION['validacion'] == 1)
{
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>
		Menu
	</title>
</head>
<body>
<a href="login.php" class="dos">Cerrar sesion</a>
<p id="title">Bienvenido soñador
<?php 

echo $_SESSION['nombre'];
echo " ";
echo $_SESSION['apellido'];

 ?>
</p>

<header>
	<div class="contenedor" id="uno">
		<a href="adicionar_deseo.php">
			<img class="icon" src="css/image/agregar.png">
			<p class="parrafo">Agregar Deseo</p>
		</a>
	</div>

	<div class="contenedor" id="dos">
		<a href="borrar.php">
			<img class="icon" src="css/image/eliminar.php">
			<p class="parrafo">Eliminar Deseo</p>
		</a>
	</div>

	<div class="contenedor" id="tres">
		<a href="editar_deseo.php">
			<img class="icon" src="css/image/editar.php">
			<p class="parrafo">Editar Deseo</p>
		</a>
	</div>

	<div class="contenedor" id="cuatro">
		<a href="listar_deseos.php">
			<img class="icon" src="css/image/consult.php">
			<p class="parrafo">Consultar Deseo</p>
		</a>
	</div>

</header>

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
