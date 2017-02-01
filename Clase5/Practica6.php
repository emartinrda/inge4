<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Practica 6</title>
</head>
<body>
<h3>Pr&aacute;ctica 6</h3>

<?php

$cadenas = array( "cadena1","cadena2","cadena3","cadena4","cadena5","cadena6","cadena7",
		          "cadena8","cadena9","cadena10"
                );

$cadena1 = "cadena1";
$cadena2 = "cadena";

if( in_array($cadena1,$cadenas) )
	echo "Existe la cadena<br/>";
else{
		echo "Es nueva<br/>";
		$cadenas[] = $cadena1;
	}

var_dump($cadenas);
echo "<br/><br/>";

if( in_array($cadena2,$cadenas) )
	echo "Existe la cadena<br/>";
else{
		echo "Es nueva<br/>";
		$cadenas[] = $cadena2;
	}
var_dump($cadenas);
echo "<br/><br/>";
?>

</body>
</html>


