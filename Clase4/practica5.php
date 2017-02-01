<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Practica 5</title>
</head>
<body>
<h3>Pr&aacute;ctica 5</h3>
<?php
	mt_srand(time());
	
	define("CONSTANTEA", 5);
	define("CONSTANTEB", 8);
	define("CONSTANTEC", 3);
	
	$x = mt_rand(1, 10);
	$x1 = ( (-CONSTANTEB) + sqrt( (pow(CONSTANTEB, 2)-( 4 * CONSTANTEA * CONSTANTEC ) ) ) ) 
	      / ( 2 * CONSTANTEA );
	
	$x2 = ( (-CONSTANTEB) - sqrt( (pow(CONSTANTEB, 2)-( 4 * CONSTANTEA * CONSTANTEC ) ) ) )
	      / ( 2 * CONSTANTEA );
	
	echo "El resultado para x1 es $x1 <br/>";
	echo "El resultado para x2 es $x2 <br/>";
?>

</body>
</html>


