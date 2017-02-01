<?php 

include 'biblioteca/conexion.php';

//llamar a la funcion sesion
session_start();

//si no existe el indice usuario en la variable session es porque aun no inicio sesion
if (isset($_SESSION['usuario']) && $_SESSION['usuario'] == $_POST['usuario']){
	echo "Usted ha dejado su sesion abierta";
	echo '<br>';
	echo "<a href='logout.php'>Cerrar sesion </a>";
}else{

	$sql = "select id_usuario, usuario, password, nombre, apellido from usuarios where usuario = '".$_POST['usuario']."'";
	
	// crear conexion
	$con = new Conexion();
	$pdo = $con->getPDO();
	//enviar consulta
	$resultado = $pdo->query($sql);
	// devuelve un array con los inidices asociados al nombre del campo de la tabla
	$filas = $resultado->fetch(PDO::FETCH_ASSOC);
	

	//validaciones si existe usuario, password incorrecto
	if (!empty($filas)) {
		$pass = $_POST['password'];
		if ($filas['password'] == md5($pass)){

			$_SESSION['usuario'] = $filas['usuario'];
			echo "Bienvenido ".$filas['nombre']." ".$filas['apellido'];
			echo "<br/>";
			echo "<a href='logout.php'>Cerrar sesion </a>";

		}else{
			echo "password incorrecto";	
			echo "<br/>";
			echo "<a href='logout.php'>Iniciar sesion</a>";			
			
		}
	}else{
		echo "No existe el usuario";
		echo "<br/>";
		echo "<a href='logout.php'>Iniciar sesion</a>";
	}
}



