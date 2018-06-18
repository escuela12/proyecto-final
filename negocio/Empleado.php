<?php 

require_once '../datos/DataEmpleado.php';

class Empleado {

	private $IDEmpleados;
	private $nombre;
	private $dni;
	private $direccion;
	private $telefono;
	private $cargo;
		
	public function __construct($IDEmpleados=null, $nombre = null, $dni = null, $direccion = null, $telefono = null, $cargo = null){
		$this -> IDEmpleados = $IDEmpleados;
		$this -> nombre = $nombre;
		$this -> dni = $dni;
		$this -> direccion = $direccion;
		$this -> telefono = $telefono;
		$this -> cargo = $cargo;
	}

	public function getIDEmpleados(){
		return $this -> IDEmpleados;
	}

	public function getNombre(){
		return $this -> nombre;
	}

	public function getDni(){
		return $this -> dni;
	}

	public function getDireccion(){
		return $this -> direccion;
	}
	public function getTelefono(){
		return $this -> telefono;
	}

	public function getCargo(){
		return $this -> cargo;
	}

	public function setIDEmpleados($IDEmpleados){
		$this -> IDEmpleados;
	}

	public function setNombre($nombre){
		$this -> nombre;
	}

	public function setDni($dni){
		$this -> dni;
	}

	public function setDireccion($direccion){
		$this -> direccion;
	}

	public function setTelefono($telefono){
		$this -> telefono;
	}

	public function setCargo($cargo){
		$this -> cargo;
	}
	
	public function Insertar() {
    	$objDataEmpleados = new DataEmpleado();
        $resultado = $objDataEmpleados->Insertar($this -> nombre, $this -> dni, $this -> direccion, $this -> telefono, $this -> cargo);
        return $resultado;
    }

    public function Modificar() {
        $objDataEmpleado = new DataEmpleado();
        $resultado = $objDataEmpleado->Modificar($this -> IDEmpleados, $this -> nombre, $this -> dni, $this -> direccion, $this -> telefono, $this -> cargo);
	    return $resultado;
    }

    public function Eliminar(){
        $objDataEmpleado = new DataEmpleado();
        $resultado = $objDataEmpleado->Eliminar($this -> IDEmpleados);
	    return $resultado;
    }

    public function buscarPorIDEmpleados($IDEmpleados) {

    	$objDataEmpleado = new DataEmpleado();
        $registro = $objDataEmpleado->buscarPorIDEmpleados($IDEmpleados);
        if ($registro)
        	return new self($registro['IDEmpleados'] , $registro['nombre'] ,$registro['dni'] ,$registro['direccion'], $registro['telefono'], $registro['cargo']);
        else 
        	return false;
    }

    public function Listar() {
        $objDataEmpleado = new DataEmpleado();
        $arrayRegistros = $objDataEmpleado->Listar();
        
        if (!$arrayRegistros)
        	return false;
        else {
        	$arrayEmpleados = array();
        	foreach ($arrayRegistros as $registro) {
        		$objgEmpleados = new Empleado ($registro['IDEmpleados'] , $registro['nombre'] ,$registro['dni'] ,$registro['direccion'], $registro['telefono'], $registro['cargo']);
        		$arrayEmpleados[] = $objgEmpleados;
        	}

        	return $arrayEmpleados;

        } 
        	
    }

}

?>