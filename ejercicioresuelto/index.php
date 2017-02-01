<?php
include_once 'biblioteca/conexionBd.php';
$recursoDeConexion = conectar("config/config.inc");
//Realizar Select
$query="select p.persona_id,p.nombre,p.apellido,p.cedula,
s.nombre as sexo_nombre,
pr.nombre as profesion_nombre,
ec.nombre as estado_civil_nombre
from persona p
left join sexo s using(sexo_id)
left join profesion pr using(profesion_id)
left join estado_civil ec using(estado_civil_id);";
$resultSet = ejecutarQuery($recursoDeConexion,$query);
imprimirFormaTabular($resultSet);
desconectar($recursoDeConexion);
?>