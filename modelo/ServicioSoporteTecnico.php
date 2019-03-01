<?php

include('Persona.php');
include('Problema.php');
class ServicioSoporteTecnico{

private $producto;
private $persona;
private $problema;

function __construct() 
    { 
        $a = func_get_args(); 
        $i = func_num_args(); 
        if (method_exists($this,$f='__construct'.$i)) { 
            call_user_func_array(array($this,$f),$a); 
        } 
    } 

public function __construct2($producto, $persona, $problema){	
	$this->problema=$problema;
	$this->producto=$producto;
	$this->persona=$persona;		
	
	}	


public function getProblema(){
        return $this->problema;    

    }
	public function getProducto(){
        return $this->producto;    

    }
	public function getPersona(){
        return $this->persona;    

    }
	

  public function setProducto($producto) {
        $this->producto = $producto;  
    }
	 public function setPersona($persona) {
        $this->persona = $persona;  
    }
	 public function setProblema($problema) {
        $this->problema = $problema;  
    }
	
	
	public function agregarCliente($nombre, $apellido, $identificacion, $direccion, $email, $producto, $telefono){
		$this->persona = new Cliente($apellido, $nombre, $identificacion, $telefono, $email, $direccion, $producto);
		
	}
	public function agregarTecnico($apellido, $nombre, $identificacion){
	$this->persona= new Tecnico($apellido, $nombre, $identificacion);	
	}
	
	
	public function identificarProducto($array){
    $array=array('tv','pc');		
	$obj = new ArrayObject($array);
	$tipo=Array('Mama');
	$lista = new ArrayObject($tipo);
	$it= $obj->getIterator();
	
	while($it->valid()){
		if($it->current()=='tv'){
		$lista->append('tv');
		}
		if($it->current()=='pc'){
		$lista->append('pc');	
		}
		if($it->current()=='camara'){
		$lista->append('camara');	
		}
		if($it->current()=='celular'){
		$lista->append('celular');
		}
		if($it->current()=='impresora'){
		$lista->append('impresora');	
		}
		if($it->current()=='laptop'){
		$lista->append('laptop');	
		}
		if($it->current()=='tablet'){
		$lista->append('tablet');	
		}
	}
		
		return $lista;
	}
	
	public function agrergarProducto($id,$garantia,$marca,$modelo,$nombre,$tipo){
	$tipo=identificarProducto();	
	$p= new Producto($id,$garantia,$marca,$modelo,$nombre,$tipo);
	$producto= new ArrayObject($p);	
	}
	
	
	
	
}






?>