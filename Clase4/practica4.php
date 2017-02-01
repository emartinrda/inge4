<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Practica 4</title>
</head>
<body>
<h3>Pr&aacute;ctica 4</h3>
<?php
	mt_srand(time());
	
	$contador = 0;
	
	for( ; ; )
	{
		$contador++;
		
		$numeroAleatorio = mt_rand(0, 100000);
		//echo $numeroAleatorio."<br/>";
		
		if( ( $numeroAleatorio % 983 ) == 0 )
		{
			echo "N&uacute;mero Aletorio divisible por 983: " . $numeroAleatorio."<br/>";
			echo "Se solicitaron $contador n&uacute;meros aleatorios<br/>";
			break;
		}
	}
?>

</body>
</html>


