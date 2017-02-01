<?php 

class Telefono
{
	private $tipo;
	private $numero;

	
	function __construct()
	{
		
	}

	public function getTipo(){
		return $this->tipo;
	}

	public function getNumero(){
		return $this->numero;
	}

	public function setTipo($tipo){
		$this->tipo = $tipo;
	}

	public function setNumero($numero){
		$this->numero = $numero;
	}
}

 ?>