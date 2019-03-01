<?php
include('problema.php');
include('cliente.php');
class gestionSolicitud{
	
	private $problema;
	
	function __construct() 
    { 
        $a = func_get_args(); 
        $i = func_num_args(); 
        if (method_exists($this,$f='__construct'.$i)) { 
            call_user_func_array(array($this,$f),$a); 
        } 
    } 
	
	public function verificarGarantia($garantia){
		if($garantia!=0)
		return false;
		
		return true;
	}
	
	public function comenzarServicio($descripcion, $producto){
		$this->problema = new Problema($descripcion, $problema);
		
	}
	
	public function comunicacionCliente($cliente){
	
	$cliente=new Cliente();
	$fecha=$cliente->getFecha();
	$direccion=$cliente->getDireccion();
	
	return $fecha+" "+$direccion;
	
	}
	
	public function editarPerfil($direccion, $email, $telefono){
		$this->cliente = new Cliente($$telefono, $email, $direccion);
		
	}
	
	
	
}




?>