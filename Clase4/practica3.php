<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Practica 3</title>
</head>
<body>
<h3>Pr&aacute;ctica 3</h3>

<?php
	mt_srand(time());
	
	$contador = 0;
	
	for( $i = 0 ; $i < 10000 ; $i++ )
	{
		$numeroAleatorio = mt_rand(0, 10000);
		if( ( $numeroAleatorio % 2 ) == 0 )
		{	
			echo $numeroAleatorio."<br/>";
			$contador++;
		}
	}
	
	echo "Se generaron $contador n&uacute;meros aleatorios pares de 10.000 iteraciones.";
?>

</body>
</html>


