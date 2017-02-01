<?php
	//**************************************Paso 1 - Me conecto a la BD******************************//
	$conn = pg_connect("host=127.0.0.1 port=5432 dbname=ejemplo user=postgres password=postgres");
	//Controlo si hubo error de conexión
	if (!$conn) { 
		echo "Ocurrio un Error";
		exit;
	}
	//*************************************FIN PASO 1************************************************//
	
	
	//*****************************Paso 2 - Realizó el query y ejecuto el query************************//
	$result = pg_query($conn, "select p.nombre, p.precio, m.nombre , e.nombre, c.nombre
							   from producto p, marca m, empresa e, categoria c
							   where p.id_marca = m.id_marca
							   and m.id_empresa = e.id_empresa
							   and c.id_categoria = p.id_categoria");
	if (!$result) //Control si hubo error en la ejecución del query
	{
		"Ocurrio un Error";
		exit;
	}
	//*************************************FIN PASO 2 y 3***********************************************//
	
	
	//***********************************Paso 4 - Proceso los result set*******************************//
	echo "<table>";
		echo "<tr>";
			echo "<td style='border: 1px solid black; background-color:red;'> Nom. Producto </td>";
			echo "<td style='border: 1px solid black; background-color:red;'> Precio </td>";
			echo "<td style='border: 1px solid black; background-color:red;'> Marca </td>";
			echo "<td style='border: 1px solid black; background-color:red;'> Empresa </td>";
			echo "<td style='border: 1px solid black; background-color:red;'> Categoria </td>";
		echo "</tr>";

	while ($row = pg_fetch_row($result))
	{
		echo "<tr>";
			echo "<td style='border: 1px solid black'> $row[0] </td>";
			echo "<td style='border: 1px solid black'> $row[1] </td>";
			echo "<td style='border: 1px solid black'> $row[2] </td>";
			echo "<td style='border: 1px solid black'> $row[3] </td>";
			echo "<td style='border: 1px solid black'> $row[4] </td>";
		echo "</tr>";
	}

	echo "</table>";
	//***************************************FIN PASO 4*************************************************//
	
	//***********************************Paso 5: Cierro la conexión*******************************//
	pg_close($conn);
?>