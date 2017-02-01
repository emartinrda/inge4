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

$vector = array();

$sum = 0;

for( $i = 0; $i < 100 ; $i++ )
{
	$vector[] =  mt_rand(1,100);
	$sum      += $vector[$i];
}

echo "La suma de los elementos del vector es ". $sum;
echo "<br/><br/>";
print_r($vector);
?>

</body>
</html>


