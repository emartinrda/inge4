<?php

//llamar a la funcion sesion
session_start();

$existeProducto = false;

if (! isset($_SESSION['carrito'])){
	$_SESSION['carrito'] = array();
}


foreach ($_SESSION['carrito'] as $key => $value) {
	if ($value ==  $_GET['id_producto']){
		echo "El producto ya se encuentra en su carrito!";
		$existeProducto = true;
	}


}


if (! $existeProducto){
	// agrega al final del array de carrito
	$_SESSION['carrito'][] = $_GET['id_producto'];
	echo "Producto agregado!";

}

// para verificar si agregas
//var_dump( $_SESSION['carrito'] );



