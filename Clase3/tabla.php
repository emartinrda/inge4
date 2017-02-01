<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Generación de Tabla en PHP</title>
<link href="css/estilo.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<?php
echo "<table>";
echo "<tr>";
echo '<th colspan="3">Productos</th>';
echo "</tr>";
echo "<tr>";
echo '<th class="cabecera">Nombre</th>';
echo '<th class="cabecera">Cantidad</th>';
echo '<th class="cabecera">Precio (Gs)</th>';
echo "</tr>";
echo "<tr>";
echo "<td>Coca Cola</td>";
echo '<td class="center">100</td>';
echo '<td class="center">4.500</td>';
echo "</tr>";
echo "<tr>";
echo "<td>Pepsi</td>";
echo '<td class="center">30</td>';
echo '<td class="center">4.800</td>';
echo "</tr>";
echo "<tr>";
echo "<td>Sprite</td>";
echo '<td class="center">20</td>';
echo '<td class="center">4.500</td>';
echo "</tr>";
echo "<tr>";
echo "<td>Guaraná</td>";
echo '<td class="center">200</td>';
echo '<td class="center">4.500</td>';
echo "</tr>";
echo "<tr>";
echo "<td>SevenUp</td>";
echo '<td class="center">24</td>';
echo '<td class="center">4.800</td>';
echo "</tr>";
echo "<tr>";
echo "<td>Mirinda Naranja</td>";
echo '<td class="center">56</td>';
echo '<td class="center">4.800</td>';
echo "</tr><tr><td>Mirinda Guaraná</td>";
echo '<td class="center">89</td><td class="center">4.800</td></tr><tr>
			<td>Fanta Naranja</td>
			<td class="center">10</td>
			<td class="center">4.500</td>
		</tr>
		<tr>
			<td>Fanta Piña</td>
			<td class="center">2</td>
			<td class="center">4.500</td>
		</tr>
	</table>';
?>
</body>
</html>