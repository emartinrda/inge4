<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Generación de Tabla en PHP</title>
<link href="css/estilo.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<?php
$str=<<<'HTML'
	<table>
		<tr>
			<th colspan="3">Productos</th>
		</tr>
		<tr>
			<th class="cabecera">Nombre</th>
			<th class="cabecera">Cantidad</th>
			<th class="cabecera">Precio (Gs)</th>
		</tr>
		<tr>
			<td>Coca Cola</td>
			<td class="center">100</td>
			<td class="center">4.500</td>
		</tr>
		<tr>
			<td>Pepsi</td>
			<td class="center">30</td>
			<td class="center">4.800</td>
		</tr>
		<tr>
			<td>Sprite</td>
			<td class="center">20</td>
			<td class="center">4.500</td>
		</tr>
		<tr>
			<td>Guaraná</td>
			<td class="center">200</td>
			<td class="center">4.500</td>
		</tr>
		<tr>
			<td>SevenUp</td>
			<td class="center">24</td>
			<td class="center">4.800</td>
		</tr>
		<tr>
			<td>Mirinda Naranja</td>
			<td class="center">56</td>
			<td class="center">4.800</td>
		</tr>
		<tr>
			<td>Mirinda Guaraná</td>
			<td class="center">89</td>
			<td class="center">4.800</td>
		</tr>
		<tr>
			<td>Fanta Naranja</td>
			<td class="center">10</td>
			<td class="center">4.500</td>
		</tr>
		<tr>
			<td>Fanta Piña</td>
			<td class="center">2</td>
			<td class="center">4.500</td>
		</tr>
	</table>
	<button onclick='alert("hola");'>BOTON</button>
HTML;
echo $str;
?>
</body>
</html>