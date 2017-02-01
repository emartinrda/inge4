<?php 
//Incluir el archivo telefono en en archivo persona
include 'Telefono.php';

class Persona
{
	private $nombre;
	private $apellido;
	private $cedula;
	private $direccion;
	private $edad;
	private $telefonos = array();

	function __construct()
	{
		
	}

	public function getNombre(){
		return $this->nombre; 
	}

	public function getApellido(){
		return $this->apellido;
	}

	public function getdireccion(){
		return $this->direccion;
	}

	public function getEdad(){
		return $this->edad;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}

	public function setApellido($apellido){
		$this->apellido = $apellido;
	}

	public function setCedula($cedula){
		$this->cedula = $cedula;
	}

		public function setDireccion($direccion){
		$this->direccion = $direccion;
	}

		public function setEdad($edad){
		$this->edad = $edad;
	}

	public function agregarTelefono(Telefono $telefono){
		//De esta forma siempre agrega al final del array
		$this->telefonos[] = $telefono;
	}	


}

$telefono1 = new Telefono();
$telefono1->setTipo('Movil');
$telefono1->setNumero('0974789000');

$telefono2 = new Telefono();
$telefono2->setTipo('Linea Fija');
$telefono2->setNumero('021751810');

/*Instancia de objeto Persona*/
$personaNueva = new Persona();
$personaNueva->setNombre('Derlis');
echo $personaNueva->getNombre();

$personaNueva->agregarTelefono($telefono1);
$personaNueva->agregarTelefono($telefono2);


echo "<br>";

//Imprime el contenido de la variable
var_dump($personaNueva)
 ?>