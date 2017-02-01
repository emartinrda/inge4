<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Practica 1</title>
</head>
<body>
<h3>Pr&aacute;ctica 1</h3>

<?php
	$varA = 100;
	$varB = 200;
	$varC = 300;
	
	echo "El resultado de la expresi&oacute;n de $varA*3 es: " .  ( $varA * 3 ) . "<br/>";
	echo "El resultado de la expresi&oacute;n de $varA+$varC es: " . ( $varA + $varC ) . "<br/><br/>";
	
	
	$mensaje = ($varA*3) > ($varA+$varC) ?
	           "La expresi&oacute;n $varA*3 es mayor a la expresi&oacute;n $varB+$varC" :
	           "La expresi&oacute;n $varA*3 es menor o igual a la expresi&oacute;n $varB+$varC";
	
	echo $mensaje."<br/>";
	
	$mensaje = ($varA*3) <= ($varA+$varC) ?
			   "La expresi&oacute;n $varB+$varC es mayor o igual a la expresi&oacute;n $varA*3" :
	           "La expresi&oacute;n $varB+$varC es menor a la expresi&oacute;n $varA*3 ";
	
	echo $mensaje."<br/>";
?>

</body>
</html>


