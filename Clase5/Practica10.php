<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Practica 10</title>
</head>
<body>
<h3>Pr&aacute;ctica 10</h3>
<?php

$arbolBinario = array(3,6,4,14,9,900,45,100,30,40,15,-1,-1,-1,-1);

function recorridoPreOrden($arbolBinario,$i)
{
    if( $i >= (count($arbolBinario)-1) )
        return;
    
    if( $arbolBinario[$i] != -1 )
		echo $arbolBinario[$i]." ";
	
	recorridoPreOrden($arbolBinario, 2*$i+1);
	recorridoPreOrden($arbolBinario, 2*$i+2);
}

function recorridoPostOrden($arbolBinario,$i)
{
	if( $i >= (count($arbolBinario)-1) )
		return;

	recorridoPostOrden($arbolBinario, 2*$i+1);
	recorridoPostOrden($arbolBinario, 2*$i+2);
	
	if( $arbolBinario[$i] != -1 )
		echo $arbolBinario[$i]." ";
}

function recorridoInOrden($arbolBinario,$i)
{
	if( $i >= (count($arbolBinario)-1) )
		return;

	recorridoInOrden($arbolBinario, 2*$i+1);
	if( $arbolBinario[$i] != -1 )
		echo $arbolBinario[$i]." ";
	recorridoInOrden($arbolBinario, 2*$i+2);
}
echo "Pre Orden: ";
recorridoPreOrden($arbolBinario, 0);
echo "<br/>";
echo "Post Orden: ";
recorridoPostOrden($arbolBinario,0);
echo "<br/>";
echo "In Orden: ";
recorridoInOrden($arbolBinario,0);

?>
</body>
</html>
