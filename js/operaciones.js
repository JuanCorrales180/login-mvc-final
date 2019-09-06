$(document).ready(function(){
	$("#envia").click(function(){
		var user = $(".correo").val();
		var pass = $(".clave").val();

		if (user !='' && pass !='') 
		{
			$.ajax({
				url:'../controlador/login.php',
				method:'POST',
				data:{correo:user, clave:pass},
				success: function(msg)
				{
					if (msg == '1') 
					{
						$('#mensaje').html('Datos Incorrectos');
					}
					else
					{
						window.location = msg;
					}
				}
			});
		}
		else
		{
			$('#mensaje').html('Ingrese los datos');
		}
	});
});


// registro de usuario
$(document).ready(function(){
	$("#registrar").click(function(){

		var cedula = $("#cedula").val();
		var nombre = $("#nombre").val();
		var apellido = $("#apellido").val();
		var usuario = $("#usuario").val();
		var pass1 = $("#pass1").val();
		var pass2 = $("#pass2").val();

		if (cedula !='' && nombre !='' && apellido !='' && usuario !='' && pass1 !='' && pass2 !='') 
		{

			$.ajax({
				url: '../controlador/crear.php',
				method: 'POST',
				data: {cedula: cedula, nombre: nombre, apellido: apellido, usuario: usuario, pass1: pass1, pass2: pass2},
				success: function(msg)
				{
					if (msg == '1') 
					{
						$('#mensaje').html('El usuario ingresado ya existe');
					}
					else if(msg == '2')
					{
						$('#mensaje').html('las contraseñas no coinciden');
					}
					else
					{
						window.location = msg;
					}
				}
			});
		}
		else
		{
			$('#mensaje').html('No puede haber campos vacios');
		}
	});
});


//Evento click agregar deseo
$('#Agregar').click(function(){

	var titulo = $('#titulo').val();
	var des = $("#area").val();

	if(titulo !='' && des !='')
	{
		//los campos estan llenos
		$.ajax({
			url: '../controlador/registrarDeseo.php',
			method: 'POST',
			data: {titulo: titulo, des: des},
			success: function(msg)
			{
				if (msg == '1') 
				{
					//Error
					$("#mensaje").html("El deseo que registraste ya se encuentra registrado ");
				}
				else 
				{
					// se registro
					$("#mensaje").html(msg); 
				}
			}
		});
	}	
	else
	{
		//algun campo esta vacio
		$("#mensaje").html("Por favor ingresa todo los campos");
	}
});


// evento eliminar 
$("#eliminar").click(function(){
	var  titulo = $("#jax").val();

	if(titulo !='')
	{
		// el campo esta lleno
		$("#mensaje").html("");

		$.ajax({
			url: '../controlador/eliminar.php',
			method: 'POST',
			data: {titulo: titulo},
			success: function(msg)
			{
				if (msg == 1) 
				{
					//error
					$("#mensaje").html("El deseo que ingreso no existe");
				}
				else
				{
					//se elimino
					$("#mensaje").html(msg);
				}
			}
		});
	}
	else
	{
		// el campo esta vacio
		$("#mensaje").html("Por favor ingresa un titulo");
	}

});



//Actulizar 
$('#actualizar').click(function(){
	var titulo = $('#jinx').val();
	var des = $("#area").val();

	if(titulo !='' && des !='')
	{
		//los campos estan llenos
		$.ajax({
			url: '../controlador/actualizarDeseo.php',
			method: 'POST',
			data: {titulo: titulo, des: des},
			success: function(msg)
			{
				if (msg == '1') 
				{
					//Error
					$("#mensaje").html("El deseo que ingreso no exite");
				}
				else 
				{
					// se registro
					$("#mensaje").html(msg); 
				}
			}
		});
	}	
	else
	{
		//algun campo esta vacio
		$("#mensaje").html("Por favor ingresa todo los campos");
	}
});
