<!DOCTYPE html>
<html>
<head>
	<title>Crear cuenta</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	<center><h1>Regristrar Gratis</h1>
	<div class="login">
		<form method="POST">
			<fieldset>
				<legend>Crear cuenta</legend>
			<table>
				<tr>
					<td>
						<input title="Es necesario numero de identificacion" type="text" id="cedula" class="pass" placeholder="Identificación" required>
					</td>
				</tr>
				<tr>
					<td>
						<input title="Es necesario un nombre de usuario" type="text" class="pass" id="nombre" placeholder="Nombre" required>
						<input title="Campo obligatorio" class="pass" type="text" id="apellido" placeholder="Apellido" required>
					</td>
				</tr>
				<tr>
					<td>
						<input title="Campo obligatorio" type="text" id="usuario" class="pass" placeholder="Nombre de usuario" required>
					</td>
				</tr>
				<tr>
					<td>
						<input title="Campo obligatorio" type="password" id="pass1" class="pass" placeholder="Contraseña" required>
					</td>
				</tr>
				<tr>
					<td>
						<input title="Campo obligatorio" type="password" id="pass2" class="pass" placeholder="Verificar Contraseña" required>
					</td>
				</tr>
				<tr>
					<td><p id="mensaje" style="color: red;"></p></td>
				</tr>
			</table>
				<button type="button" id="registrar">Registrar</button>
				<!-- <button type="reset" id="btn-cancelar-registro">Cancelar</button> -->
			</fieldset>
		</form>
	</div>
	</center>

	<script type="text/javascript" src="../js/jquery.js"></script>
 	<script type="text/javascript" src="../js/operaciones.js"></script>
</body>
</html>