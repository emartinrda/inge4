<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Practica 9</title>
</head>
<body>
<h3>Pr&aacute;ctica 9</h3>
<?php

$v = crearVector();
imprimirSinRecursion($v);
echo " (Tamanho del vector ".count($v).")<br/>";
imprimirRecursivo($v,count($v));
echo " (Tamanho del vector ".count($v).")<br/>";

function crearVector()
{
	mt_srand(time());
	
	for ( $i = 0 ; $i < 20 ; $i++ )
		$vector[] = mt_rand(1,10);
	
	return $vector;
}

function imprimirSinRecursion($vector)
{
	foreach ( $vector as $i => $v )
		echo $v." ";
}

function imprimirRecursivo($vector,$i)
{
    if( $i == 0 )
        return;
    
    echo $vector[$i-1]." ";
    
	imprimirRecursivo($vector, $i-1);
}


?>
</body>
</html>
