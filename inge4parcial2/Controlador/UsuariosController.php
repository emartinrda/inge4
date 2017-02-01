<?php 

include_once '../Conexion/Conexion.php';
include_once '../Modelo/Usuarios.php';

/**
* 
*/
class UsuariosController
{
	private $pdo;
	
	function __construct()
	{
		$con = new Conexion("../Conexion/database.inc");
		$this->pdo = $con->getPDO();
	}

	public function obtener($usuario, $password){
		try{

			$usuarioRetorno = new Usuarios();

			$sql = "SELECT usuario, password, nombre, apellido 
					FROM usuarios 
					WHERE usuario = ?
					AND password = crypt(?, password)";
			$stm = $this->pdo->prepare($sql);
			$stm->execute(array($usuario, $password));
			$rs = $stm->fetch(PDO::FETCH_OBJ);

			if ($rs){
				$usuarioRetorno = new Usuarios();
				$usuarioRetorno->set('usuario',$rs->usuario);
				$usuarioRetorno->set('password',$rs->password);
				$usuarioRetorno->set('nombre',$rs->nombre);
				$usuarioRetorno->set('apellido',$rs->apellido);
			}

			return $usuarioRetorno;

		}catch(Exception $e){
			echo $e->getMessage();
			return new Usuarios();
		}
	}
}