<?php
	$dbconn = pg_connect("host=localhost dbname=ejercicio4 user=postgres password=postgres") 
	or die('No se ha podido conectar: ' . pg_last_error());

	$i   = 1;
	$sql = "";
	while($i<=1000)
	{
		$n    = "Nombre ".$i;
		$d    = "Descripcion ".$i;
		$sql1 = "INSERT INTO productos (nombre, descripcion) VALUES ('$n','$d');";
		$sql .= $sql1;
		$i++;
	}
	
	$result = pg_query($sql);
	if (!$result) //Control si hubo error en la ejecución del query
	{
		"Ocurrio un Error";
		exit;
	}
	
	$query = "SELECT * FROM productos";
			
	echo "Ejercicio 4";		
			
	$result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());
	
	echo "<table border='1' cellpadding='5'>";
	while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) 
	{
		echo "<tr>";
		foreach ($line as $col_value) 
		{
			echo "<td>$col_value</td>";
		}
		echo "</tr>";
	}
echo "</table>";
?>