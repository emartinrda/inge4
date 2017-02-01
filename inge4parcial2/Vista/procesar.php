<?php

include_once '../Controlador/UsuariosController.php';

session_start();


// Redirigir a la pagina de inicio si no se existe los campos
if (!isset($_POST['usuario']) || ! isset($_POST['password'])){
	header("Location:index.php");
}

if (empty($_POST['usuario']) || empty($_POST['password'])){
	echo "Campos vacios!";
}

$usuarioBD = new UsuariosController();
//Obtener usuario por usuario y contraseña desde la BD
$usuario = $usuarioBD->obtener($_POST['usuario'], $_POST['password']);

//Si existe el usuario entonces login correcto
if (!empty($usuario->get('usuario'))){

	if (!isset($_SESSION['usuario']) || empty($_SESSION['usuario']))
	{
		$_SESSION['usuario'] 	= $usuario->get('usuario');
		$_SESSION['nombre'] 	= $usuario->get('nombre');
		$_SESSION['apellido'] 	= $usuario->get('apellido');
		
	}
	
	bienvenida();

}else{
	echo "El usuario y/o la contraseña es invalida!";
}


function bienvenida(){

	if (isset($_SESSION['usuario']) && !empty($_SESSION['usuario']))
	{
		echo "Bienvenido ".$_SESSION['nombre'] ." ". $_SESSION['apellido'];
		echo "<br>";
		echo "<a href='logout.php'>Cerrar Sesion</a>";
	}else{
		echo "No has iniciado Sesion...";
	}

}

