<?php


	$dbconn = pg_connect("host=localhost dbname=Recuperatorio user=postgres password=Duser89") 
	or die('No se ha podido conectar: ' . pg_last_error());

	$i   = 1;
	$sql = "";

	while($i<=1000)
	{
		$pid    = "Persona_id ".$i;
		$n    = "Nombre ".$i;
		$a    = "Apellido ".$i;
		$nro_d    = "Numero_documento ".$i;
		$tipo_d   = "Tipo_documento ".$i;


		$nro

		$sql1 = "INSERT INTO public.persona(persona_id, apellido, numero_documento, tipo_documento) VALUES ('$pid','$n', '$a', '$nro_d', '$tipo_d')";

		$sql .= $sql1;
		$i++;
	}
	

	$i   = 1;
	$sql = "";

	while($i<=10)
	{
		$nid    = "Nacionalidad_id ".$i;
		$n    = "Nacionalidad ".$i;
		$nro

		$sql1 = "INSERT INTO public.nacionalidad(nacionalidad_id, nacionalidad) VALUES ('$nid','$n')";

		$sql .= $sql1;
		$i++;
	}

	$i   = 1;
	$sql = "";

	while($i<=10)
	{
		$pid    = "Profesion_id ".$i;
		$p    = "Profesion ".$i;
		$nro

		$sql1 = "INSERT INTO public.profesion(profesion_id, profesion) VALUES ('$pid','$p')";

		$sql .= $sql1;
		$i++;
	}
	
	
?>