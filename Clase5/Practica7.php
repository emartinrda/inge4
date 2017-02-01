<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Practica 7</title>
</head>
<body>
<h3>Pr&aacute;ctica 7</h3>

<?php

$vector = array( "cadena1" => "valor1", "cadena2" => "valor2", "cadena3" => "valor3", "cadena4" => "valor4",
				 "cadena5" => "valor5", "cadena6" => "valor6", "cadena7" => "valor7", "cadena8" => "valor8",
		         "cadena9" => "valor9", "cadena10" => "valor10",
                );

$buscado1 = array( "cad"     => "val1" );
$buscado2 = array( "cadena1" => "val1" );
$buscado3 = array( "cade"    => "valor1" );
$buscado4 = array( "cadena1" => "valor1" );

$indices = array_keys($vector);
$valores = array_values($vector);

$indiceBuscado = array_keys($buscado4);
$valorBuscado = array_values($buscado4);

$tamanho1 = count($indices);
$tamanho2 = count($valores);

$indiceEncontrado = false;
$valorEncontrado  = false; 

for( $i = 0; $i < $tamanho1; $i++ )
	if( $indices[$i] == $indiceBuscado[0] )
	$indiceEncontrado = true;
	
for( $i=0; $i < $tamanho2; $i++ )
	if( $indices[$i] == $indiceBuscado[0] )
		$valorEncontrado = true;

if( $indiceEncontrado )
	echo "Se encontr&oacute; el &iacute;ndice<br/>";
else	
	echo "No se encontr&oacute; el &iacute;ndice<br/>";

if( $valorEncontrado )
	echo "Se encontr&oacute; el valor<br/>";
else
	echo "No se encontr&oacute; el valor<br/>";

if( !$indiceEncontrado && !$valorEncontrado )
	$vector[$indiceBuscado] = $valorBuscado;

echo "<br/><br/>";
print_r($vector);
?>

</body>
</html>
