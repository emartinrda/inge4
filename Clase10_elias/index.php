<?php 
	define ('ROOT',__DIR__);
	include_once 'biblioteca/conexion.php';
	$con = new Conexion();

	$sql="select p.producto_id as producto_id,
				 p.nombre as nombre,
				 p.descripcion as descripcion, 
	             m.nombre as marca, 
	             t.nombre as tipo
	             from producto p 
	             join marca m on p.marca_id=m.marca_id 
	             join tipo t on p.tipo_id=t.tipo_id";
	$rs=$con->getPDO()->query($sql);

	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 10</title>
</head>
<body>
<div>
	<table>
		<tr>
			<th>Id</th>			
			<th>Nombre</th>
			<th>Descripcion</th>
			<th>Marca</th>
			<th>Tipo</th>
		</tr>
		
		<?php foreach ($rs as $producto) { ?>
		<tr>	
			<td><?php echo $producto['producto_id']?></td>
			<td><?php echo $producto['nombre']?></td>
			<td><?php echo $producto['descripcion']?></td>
			<td><?php echo $producto['marca']?></td>
			<td><?php echo $producto['tipo']?></td>
			<td><a href="">Borrar</a></td>
			<td><a href="">Editar</a></td>
		</tr>
		<?php } ?>
			
		
	</table>
</div>
</body>
</html>