<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Practica 2</title>
</head>
<body>
<h3>Pr&aacute;ctica 2</h3>

<?php
const FILA    = 4;
const COLUMNA = 5;

mt_srand(time());

$matriz = array();

echo "<table border=1>";

for( $i = 0; $i < FILA ; $i++ )
{
	echo "<tr>";
	for( $j = 0; $j < COLUMNA; $j++ )
	{
		$matriz[$i][$j] = mt_rand(0,9);
		echo "<td>".$matriz[$i][$j]."</td>";
	}
	echo "</tr>";
}
echo "</table>";
?>

</body>
</html>


