<?php 

include 'biblioteca/conexion.php';

//llamar a la funcion sesion
session_start();


$sql = "SELECT id_producto, descripcion, precio
  FROM public.productos";

	
	// crear conexion
	$con = new Conexion();
	$pdo = $con->getPDO();
	//enviar consulta
	$resultado = $pdo->query($sql);
	// devuelve un array con los inidices asociados al nombre del campo de la tabla
	//fecht devuelve un array de la primera fila
	//fechtALL devuelve un array de todas las filas
	$lista_productos = $resultado->fetchALL(PDO::FETCH_ASSOC);

	echo "<table border='1'>";
	echo "<tr>";
	echo "<th>Id Producto</th>";
	echo "<th>Descripcion</th>";
	echo "<th>Precio</th>";
	echo "<th colspan='2'>Acciones</th>";
	echo "</tr>";

	foreach ($lista_productos as $producto) {
		echo "<tr>";
		echo "<td>".$producto['id_producto']."</td>";
		echo "<td>".$producto['descripcion']."</td>";
		echo "<td>".$producto['precio']."</td>";
		echo "<td><a href='agregar_carrito.php?id_producto=".$producto['id_producto']."'>Agregar</a></td>";
		echo "<td><a href='#'>Quitar</a></td>";
		echo "</tr>";		

	}
	echo "</table>";

	echo "<a href='procesar_pago.php'>Realizar Pago</a>";
