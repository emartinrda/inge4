<?php
/**
* 
*/
class Conexion

{
	private $pdo;
	function __construct($path='config/basedatos.inc')
	{
		$bd       = null;
		$usuario  = null;
		$password = null;
		$host     = null;
		$port     = null;
	
	
	
	   $paramConexion = file($path);
		
		//Lee el archivo y asigna el valor para cada variable que corresponde
		foreach ($paramConexion as $p) 
		{
	        list($param, $valor) = explode("=", $p);
			$$param = $valor;
		}

		//Quita los espacios
		$host     = trim($host);
		$usuario  = trim($usuario);
		$password = trim($password);
		$bd       = trim($bd);

		$conString = "pgsql:host=".$host.";dbname=".$bd;

		$this->pdo = new PDO($conString, $usuario, $password);
		}

	public function getPDO(){
		return $this->pdo;
	}
} 

?>