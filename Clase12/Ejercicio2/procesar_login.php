<?php 

include 'biblioteca/conexion.php';

//llamar a la funcion sesion
session_start();

//si no existe el indice usuario en la variable session es porque aun no inicio sesion
if (isset($_SESSION['usuario']) && $_SESSION['usuario'] == $_POST['usuario']){
	echo "usted ya tiene una sesion iniciada";
	echo "<a href='logout.php'>Cerrar sesion </a>";
}else{


	//echo $_POST['usuario'];
	//echo '<br>';
	//echo $_POST['password'];

	$sql = "select id_usuario, usuario, password from usuarios where usuario = '".$_POST['usuario']."'";
	//echo '<br>';
	//echo $sql;

	// crear conexion
	$con = new Conexion();
	$pdo = $con->getPDO();
	//enviar consulta
	$resultado = $pdo->query($sql);
	// devuelve un array con los inidices asociados al nombre del campo de la tabla
	$filas = $resultado->fetch(PDO::FETCH_ASSOC);
	// fetch es para recorrer la fila que se obtuve con el query, y esa funcion recibe como parametro la forma de recorrer la fila, 
	//PDO::FETCH_ASSOC indica que tiene que devolver un array con indices iguales al nombre de la columna de la tabla

	// fetch hace que solo devulva una sola fila de todos los registros como array
	// fetchAll devuelve una matriz de todas las filas como array.


	//echo '<br>';
	//echo $filas['id_usuario'];

	/* para recorrer matriz que devolvio el fetchAll
	foreach ($filas as $indice => $valor) {

		if ($valor['usuario'] == 'dduarte'){

		}
		# code...
	}*/

	//empty duvuelve verdadero si una variable esta vacuia
	if (!empty($filas)) {
		if ($filas['password'] == $_POST['password']){

			$_SESSION['usuario'] = $filas['usuario'];
			echo "password correcto";
		}else{
			echo "password incorrecto";		
		}
	}else{
		echo "No existe el usuario";
	}


}
