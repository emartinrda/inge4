<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Practica 8</title>
</head>
<body>
<h3>Pr&aacute;ctica 8</h3>
<?php
require_once 'biblioteca/funciones.php';

mt_srand(time());
$vector = array();
$vector = cargarArray($vector);
echo "El vector es el siguiente<br/>";

foreach ( $vector as $i => $v )
	echo $i. "=>". $v. "<br/>";

echo "<br/><br/>";
echo "El vector cuyos indices comienzan con: a,d,m,z<br/>";
$vector = imprimirElementos($vector);
foreach ( $vector as $i => $v )
	echo $i. "=>". $v. "<br/>";
?>
</body>
</html>


