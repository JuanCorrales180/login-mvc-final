<?php 


class conexion
{
	private $conexion;
	private $server = "localhost";
	private $usuario = "root";
	private $pass = "";
	private $db = "deseos";
	private $user;
	private $password;


	public function __construct()
	{
		$this->conexion = new mysqli($this->server, $this->usuario, $this->pass, $this->db);

		if($this->conexion->connect_errno)
		{
			die("Fallo al tratar de conectar con MySQL: (".$this->conexion->connect_errno.")");
		}
	}


	public function cerrar()
	{
		$this->conexion->close();
	}


	public function login($usuario, $pass)
	{
		$this->user = $usuario;
		$this->password = $pass;

		$query = "SELECT cedula, nombre, apellido, usuario, clave, cargo_id FROM deseador WHERE usuario = '".$this->user."' AND clave = '".$this->password."'";

		$consulta = $this->conexion->query($query);

		$row = mysqli_fetch_array($consulta);

		if($row['cargo_id'] == 1) //Administrador
		{
			session_start();
			$_SESSION['validacion'] = 1;
			$_SESSION['nombre'] = $row['nombre'];
			$_SESSION['apellido'] = $row['apellido'];
			$_SESSION['cedula'] = $row['cedula'];
			
			// echo "administrador.php"; //respuesta mensaje donde redirecciona
			echo "menu.php";
		}
		else if($row['cargo_id'] == 2)
		{
			session_start();
			$_SESSION['validacion'] = 1;
			$_SESSION['nombre'] = $row['nombre'];
			$_SESSION['apellido'] = $row['apellido'];
			$_SESSION['cedula'] = $row['cedula'];
			// echo "operario.php";
			echo "menu.php";
		}
		else
		{
			session_start();
			$_SESSION['validacion'] = 0;
			echo "1";
		}
	} // fin login


	function registrar_usuario($cedula, $nombre, $apellido, $usuario, $pass1, $pass2)
	{
		if($pass1 == $pass2)
		{
			$validacion_pass = true;
		}
		else 
		{
			$validacion_pass = false;
		}

		if($validacion_pass)
		{
			$consult = $this->conexion->query("SELECT usuario FROM deseador WHERE usuario = '".$usuario."'");

			if(mysqli_num_rows($consult) > 0) // if(mysqli_num_rows($consult))
			{
				echo "1";
			}
			else
			{
				$this->conexion->query("INSERT INTO deseador VALUES ('".$cedula."','".$nombre."','".$apellido."','".$usuario."', MD5('".$pass1."'), 2)");
				session_start();
				$_SESSION['validacion'] = 1;
				$_SESSION['nombre'] = $nombre;
				$_SESSION['apellido'] = $apellido;
				$_SESSION['cedula'] = $cedula;
				echo "menu.php";
			}
		}
		else
		{
			echo "2";
		}
	}



	//agregar deseo
	public function registrarDeseo($titulo, $deseo)
	{
		// validar que el deseo ingreado no exita

		//BORRAR VARIABLES
		
		session_start();
		// $_SESSION['cedula'] = 1017;
		$res = $this->conexion->query("SELECT titulo, deseador_cedula FROM deseos WHERE titulo = '".$titulo."' AND deseador_cedula = '".$_SESSION['cedula']."'");

		if(mysqli_num_rows($res) > 0)
		{
			//el deseo existe
			echo "1";
		}
		else
		{
			//registra deseo .
			$this->conexion->query("INSERT INTO deseos (titulo, descripcion, deseador_cedula) VALUES ('".$titulo."', '".$deseo."', '".$_SESSION['cedula']."')");
			echo "se registro el deseo";
		}

	}


	public function eliminarDeseo($titulo)
	{
		// validar si esite el deseo 
		session_start();
		$res = $this->conexion->query("SELECT titulo, deseador_cedula FROM deseos WHERE titulo = '".$titulo."' AND deseador_cedula = '".$_SESSION['cedula']."'");

		if (mysqli_num_rows($res) > 0) 
		{
			//el deseo existe
			$this->conexion->query("DELETE FROM deseos WHERE titulo ='".$titulo."' AND deseador_cedula = '".$_SESSION['cedula']."'");
			echo "Se elimino el deseo";
		}
		else
		{
			//no existe
			echo "1";
		}
	}


	public function modificarDeseo($titulo, $deseo)
	{
		session_start();
		// $_SESSION['cedula'] = 1017;
		$res = $this->conexion->query("SELECT titulo, deseador_cedula FROM deseos WHERE titulo = '".$titulo."' AND deseador_cedula = '".$_SESSION['cedula']."'");

		if(mysqli_num_rows($res) > 0)
		{
			//el deseo existe
			$this->conexion->query("UPDATE deseos SET descripcion = '".$deseo."' WHERE titulo = '".$titulo."' AND deseador_cedula = '".$_SESSION['cedula']."'");
			echo "se actulizo el deseo";
		}
		else
		{
			//registra deseo .
			echo "1";
		
		}
	}


	public function listarDeseos()
	{
		
		$consulta = $this->conexion->query("SELECT titulo, descripcion FROM deseos WHERE deseador_cedula = '".$_SESSION['cedula']."'");

		while($row = mysqli_fetch_array($consulta))
		{
			echo "<tr>";
				echo "<td>".$row['titulo']."</td><td>".$row['descripcion']."</td>";
			echo "</tr>";
			
		
		}

		// return $consulta;
	}

}


 ?>