<?php

include 'biblioteca/conexion.php';
//llamar a la funcion sesion
session_start();

if (isset($_SESSION['carrito'])){


	// crear conexion
	$con = new Conexion();
	$pdo = $con->getPDO();



	echo "<table border='1'>";
	echo "<tr>";
	echo "<th>Id Producto</th>";
	echo "<th>Descripcion</th>";
	echo "<th>Precio</th>";
	echo "</tr>";

	$suma = 0;

	foreach ($_SESSION['carrito'] as $key => $value) {

		$sql = "SELECT id_producto, descripcion, precio
	  	FROM public.productos where id_producto = ".$value;
	
		//enviar consulta
		$resultado = $pdo->query($sql);
		$producto = $resultado->fetch(PDO::FETCH_ASSOC);

		echo "<tr>";
		echo "<td>".$producto['id_producto']."</td>";
		echo "<td>".$producto['descripcion']."</td>";
		echo "<td>".$producto['precio']."</td>";
		echo "</tr>";	

		$suma += $producto['precio'];
		
	}

	echo "<tr>";
	echo "<td colspan='2'>Total a Pagar:</td>";
	echo "<td>".$suma."</td>";
	echo "</tr>";
	


}else{
	echo "El carrito esta vacio!";
}



	
