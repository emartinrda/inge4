<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Practica 1</title>
</head>
<body>
<h3>Pr&aacute;ctica 1</h3>

<?php
$cadenas = array("Ana","Somos","Radar","Neuquen","Anilina","Pedro","Peperoni");

foreach ($cadenas as $v)
{
	$v = strtolower($v);
	
	if($v == strrev($v))
		echo "La cadena $v es palindromo <br/>";
	else 
		echo "La cadena $v NO es palindromo <br/>";	
}
?>

</body>
</html>


