<?php

/**
* 
*/
class Conexion{
	
	private $pdo;

	public function __construct($path_config = 'config/database.inc'){

		try {

			$host     = null;
			$dbname   = null;
			$port     = null;
			$user	  = null;
			$password = null;
			
			$paramConexion = file($path_config);

			foreach ($paramConexion as $p) 
			{
		        list($param, $valor) = explode("=", $p);
		        //Asigna el valor obtenido a las variables correspondiente
				$$param = trim($valor);
			}

			$conString 	= "pgsql:host=$host;port=$port;dbname=$dbname";
			$this->pdo = new PDO($conString, $user, $password);
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

		}catch(PDOException $e){
			echo $e->getMessage();
		}

	}

	public function getPDO(){
		return $this->pdo;
	}
}