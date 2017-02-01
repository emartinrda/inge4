<?php
try{
    //Solo cambia el dsn
	$conn = new PDO('pgsql:host=localhost;dbname=ejemplo;','postgres','postgres');
	
	/**Conexiones con otras BD**/
	//$conn = new PDO('mysql:host=localhost;dbname=basededatos', $usuario, $contra);
    
	$query = "select p.nombre as nombreproducto, p.precio,c.nombre as nombrecategoria,
			  m.nombre as nombremarca,e.nombre as nombreempresa
			  from producto p
			  inner join categoria c using(id_categoria)
			  inner join marca m using (id_marca)
			  inner join empresa e using (id_empresa);";
	
	$sql = $conn->prepare($query);
	$sql->execute();
    $resultado = $sql->fetchAll();
    
	echo "<table>";
		echo "<tr>";
			echo "<td style='border: 1px solid black; background-color:red;'> Nom. Producto </td>";
			echo "<td style='border: 1px solid black; background-color:red;'> Precio </td>";
			echo "<td style='border: 1px solid black; background-color:red;'> Marca </td>";
			echo "<td style='border: 1px solid black; background-color:red;'> Empresa </td>";
			echo "<td style='border: 1px solid black; background-color:red;'> Categoria </td>";
		echo "</tr>";
	
	
	foreach ($resultado as $row) {
		echo "<tr>";
			echo "<td style='border: 1px solid black'>". $row['nombreproducto']." </td>";
			echo "<td style='border: 1px solid black'>". $row['precio'] ."</td>";
			echo "<td style='border: 1px solid black'>". $row['nombrecategoria']." </td>";
			echo "<td style='border: 1px solid black'>". $row['nombremarca']." </td>";
			echo "<td style='border: 1px solid black'>". $row['nombreempresa']." </td>";
		echo "</tr>";
    }
}catch(PDOException $e){
    echo "ERROR: " . $e->getMessage();
}
?>