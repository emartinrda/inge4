<?php
include_once 'biblioteca/utilerias.php';

function conectar($pathArchivoConexion="config/config.inc")
{
	$bd       = null;
	$usuario  = null;
	$password = null;
	$host     = null;
	$port     = null;
	
	$manejador = fopen($pathArchivoConexion, "r");
    if (!$manejador) {
        die("No se pudo abrir el archivo");
    }
	
    $paramConexion = file($pathArchivoConexion);
	$cierreArch = fclose($manejador);
	if(!$cierreArch)
	   echo "No se pudo cerrar el archivo. CUIDADO!!!!";
	
	foreach ($paramConexion as $p) 
	{
        list($param, $valor) = explode("=", $p);
		//echo $param . " " . $valor ."<br/>";
		$$param = $valor;
	}
	//echo "bd=".$bd. " usuario=" . $usuario . " pass=" . $password ."  host=" . $host ." port=".$port;
	
	$cadenaConexion    = "host=$host port=$port dbname=$bd user=$usuario password=$password";
	$recursoDeConexion = pg_connect($cadenaConexion);
	
	if(!$recursoDeConexion)
	   die("No se puedo conectar a la Base de dato");
	   
	return $recursoDeConexion;
}

function ejecutarQuery($recursoDeConexion,$query)
{
	$resultado = pg_query($recursoDeConexion, $query);
	if (!$resultado) 
	{
		echo "Ocurrió un Error - Falló el Query.\n";
		exit;
	}
	
	echo "El query se ejecuto con exito el query: $query<br/>";
	return $resultado;
}

function insertarRegistrosAleatorios($recursoDeConexion,$cantidadRegistros)
{
	$cadenaDeQuerys="";
	for($i=0;$i<$cantidadRegistros;$i++)
	{
		$nombreAleatorio      = generarCadenaAleatoria();
		$descripcionAleatoria = generarCadenaAleatoria();
		$queryInd = "insert into producto (nombre,descripcion) values('$nombreAleatorio','$descripcionAleatoria');";
		$cadenaDeQuerys .= $queryInd;
	}
	ejecutarQuery($recursoDeConexion,$cadenaDeQuerys);
}

function imprimirFormaTabular($resultSet)
{
	echo '<html><head><title></title></head><body><table border="1">';
	while ( $registro = pg_fetch_assoc($resultSet) ) 
	{
	    echo "<tr>";
	      echo "<td>".utf8_decode($registro['nombre'])."</td>";
          echo "<td>".utf8_decode($registro['apellido'])."</td>";
          echo "<td>".$registro['cedula']."</td>";
		  echo "<td>".$registro['sexo_nombre']."</td>";
          echo "<td>".$registro['profesion_nombre']."</td>";
          echo "<td>".$registro['estado_civil_nombre']."</td>";
		  $id = $registro['persona_id'];
		  echo "<td>"."<a href='"."visualizar?id=$id"."'>Visualizar</a></td>";
	    echo "</tr>";
    }
	echo "</table></body>";
}

function desconectar($recursoDeConexion)
{
	pg_close($recursoDeConexion);
}
			
?>