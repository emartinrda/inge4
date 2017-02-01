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

$vector = array();
$mayor  = 0;
$indice = -1;

for( $i = 0; $i < 50 ; $i++ )
{
	$vector[] =  mt_rand(1,100);
	if( $vector[$i] > $mayor )
	{
		$mayor  = $vector[$i];
		$indice = $i;
	}
}

echo "El elemento con &iacute;ndice $indice posee el mayor valor del array, su valor es $mayor";
echo "<br/><br/>";
print_r($vector);
?>

</body>
</html>


