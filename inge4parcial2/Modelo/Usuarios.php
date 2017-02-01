<?php

/**
* 
*/
class Usuarios
{
	private $usuario;
	private $password;
	private $nombre;
	private $apellido; 
	
	function __construct()
	{
		# code...
	}

	public function get($atributo){
		return $this->$atributo;
	}

	public function set($atributo, $valor){
		$this->$atributo = $valor;
	}
}