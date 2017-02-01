<?php
include_once 'biblioteca/conexionBd.php';

echo "<br/><br/>Base de Datos PostgreSql...<br/>";
$recursoDeConexion = conectar('postgresql');
//Realizar Select
$query     = "select p.producto_id,p.nombre as nombreproducto, p.descripcion, m.marca_id, m.nombre as nombremarca,
              t.tipo_id, t.nombre as nombretipo
              from producto p
              inner join marca m using(marca_id)
              inner join tipo t using(tipo_id) order by producto_id;";
$resultSet = ejecutarQueryPostgreSql($recursoDeConexion,$query);
$nombreRegistros = array('producto_id','nombreproducto','descripcion','nombremarca','nombretipo');
crudPostgreSql($resultSet,$nombreRegistros);
desconectarPostgreSql($recursoDeConexion);



?>