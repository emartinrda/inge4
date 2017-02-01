<?php

function cargarArray($vector)
{
	$tamanho = mt_rand(5,20);
	echo "El vector tiene tamanho ".$tamanho."<br/>";
	for( $i = 0; $i < $tamanho; $i++ )
		$vector[generarClave()] = mt_rand(1,100);
	
	return $vector;
}

function generarClave()
{
	$clave      = "";
	$abecedario = array( 'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p',
			             'q','r','s','t','u','v','w','x','y','z'
	                   );
	$tamanhoClave = mt_rand(5,10);
	for ( $i=1; $i <= $tamanhoClave; $i++ )
		$clave .= $abecedario[mt_rand(0,25)];
	
	return $clave;
}

function imprimirElementos($vector)
{
	$keys    = array_keys($vector);
	sort($keys);
	$values  = array_values($vector);
	$tamanho = count($keys);
	$vec     = array();
	
	for( $i = 0; $i<$tamanho; $i++ )
	{
		$cad = $keys[$i]; 
		if( $cad{0} == 'a' || $cad{0} == 'd' || $cad{0} == 'm' || $cad{0} == 'z' )
			$vec[$keys[$i]] = $values[$i];
	}
	
	if( count($vec) == 0 )
		echo "El vector no tiene elementos<br/>";
	
	return $vec;
}