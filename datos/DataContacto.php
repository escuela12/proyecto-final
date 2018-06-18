<?php  

require_once 'conexion.php';

class DataContacto {
	const TABLA = 'contactos';

	public function insertar($tipo, $nombre, $email, $telefono, $texto, $respondido ,$respuesta){

		$conexion = new conexion ();

		$consulta = $conexion->prepare ('INSERT INTO ' . self::TABLA . ' (tipo, nombre, email, telefono, texto, respondido, respuesta ) values (:tipo, :nombre, :email, :telefono, :texto, :respondido, :respuesta  )');

		$consulta->bindParam(':tipo', $tipo);
		$consulta->bindParam(':nombre', $nombre);
		$consulta->bindParam(':email', $email);
		$consulta->bindParam(':telefono', $telefono);
		$consulta->bindParam(':texto', $texto);
		$consulta->bindParam(':respondido', $respondido);
		$consulta->bindParam(':respuesta', $respuesta);
		
		
		$resultado = $consulta->execute();
		//echo $consulta->queryString;
		//echo $consulta->ErrorInfo()[2];
		$conexion = null;

	    return $resultado;
	}

	public function Modificar($IDContacto, $tipo, $nombre, $email, $telefono, $texto, $respondido ,$respuesta){

		$conexion = new conexion ();

		$consulta = $conexion->prepare ('UPDATE ' . self::TABLA . ' SET ,IDContacto = :IDContacto, tipo = :tipo, nombre = :nombre, email = :email, telefono = :telefono, texto = :texto, respondido = :respondido, respuesta = :respuesta WHERE IDContacto = :IDContacto');

		$consulta->bindParam(':IDContacto', $IDContacto);
		$consulta->bindParam(':tipo', $tipo);
		$consulta->bindParam(':nombre', $nombre);
		$consulta->bindParam(':email', $email);
		$consulta->bindParam(':telefono', $telefono);
		$consulta->bindParam(':texto', $texto);
		$consulta->bindParam(':respondido', $respondido);
		$consulta->bindParam(':respuesta', $respuesta);

		$consulta->execute();
		//echo $consulta->queryString ."</br>"; sirven para ver donde estan los errores
		//echo $consulta->ErrorInfo()[2]; sirve para ver cual es el error
		$conexion = null;

		return $consulta;
	}

	public function Eliminar($IDContacto){

		$conexion = new conexion ();

		$consulta = $conexion->prepare ('DELETE FROM ' . self::TABLA . ' WHERE IDContacto = :IDContacto');

		$consulta->bindParam(':IDContacto', $IDContacto);

		$consulta->execute();
		//echo $consulta->queryString ."</br>";
		//echo $consulta->ErrorInfo()[2];
		$conexion = null; 

		return $consulta;
	}

	public function buscarPorIDContacto($IDContacto){

		$conexion = new conexion();

		$consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA .' WHERE IDContacto = :IDContacto');
		$consulta->bindParam(':IDContacto', $IDContacto);
		$consulta->execute();
		$registro = $consulta->fetch();
		$conexion = null;

		return $registro;
		
	}

	public function Listar(){
		$conexion = new conexion();

		$consulta = $conexion->prepare('SELECT * FROM ' . self::TABLA );

		$consulta->execute();
		$arrayRegistros = $consulta->fetchAll();
		$conexion = null;
		//print_r($arrayRegistros);
		return $arrayRegistros;
	}
	
}

?>