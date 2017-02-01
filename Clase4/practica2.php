<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Practica 2</title>
</head>
<body>
<h3>Pr&aacute;ctica 2</h3>

<?php
	mt_srand(time());
	
	$parcial1 = mt_rand(0,30);
	$parcial2 = mt_rand(0,20);
	$final    = mt_rand(0,50);
	
	echo "La nota del primer parcial es $parcial1 / 30<br/>";
	echo "La nota del segundo parcial es $parcial2 / 20<br/>";
	echo "La nota del primer parcial es $final / 50<br/><br/>";
	
	switch ( $suma = ( $parcial1 + $parcial2 + $final ) )
	{
		case ( $suma > 0 && $suma < 60 ):
			echo "La nota obtenida por el alumno es UNO";
			break;
		
		case ( $suma >= 60 && $suma < 70 ):
			echo "La nota obtenida por el alumno es DOS";
			break;
			
		case ( $suma >= 70 && $suma < 80 ):
			echo "La nota obtenida por el alumno es TRES";
			break;
			
		case ( $suma >= 80 && $suma < 91 ):
			echo "La nota obtenida por el alumno es CUATRO";
			break;
			
		case ( $suma >= 91 && $suma <= 100 ):
			echo "La nota obtenida por el alumno es CINCO";
			break;
		
		default:
			echo "La suma total est&aacute; fuera de escala.";
			break;
	}	
?>

</body>
</html>


