<?php

class Producto{
private $id;
private $garantia;
private $marca;
private $modelo;
private $nombre;
private $tipo;
	
function __construct() 
    { 
        $a = func_get_args(); 
        $i = func_num_args(); 
        if (method_exists($this,$f='__construct'.$i)) { 
            call_user_func_array(array($this,$f),$a); 
        } 
    } 
	

 function __construct1($id,$garantia,$marca,$modelo,$nombre,$tipo){	
	$this->id=$id;
	$this->garantia=$garantia;
	$this->marca=$marca;
	$this->modelo=$modelo;
	$this->nombre=$nombre;
	$this->tipo=$tipo;
			
	}
	
	 
	 public function getId() {
        return $this->id;    

    }
	 public function getGarantia() {
        return $this->garantia;    

    }
	 public function getMarca() {
        return $this->marca;    

    }
	 public function getModelo() {
        return $this->modelo;    

    }
	 public function getNombre() {
        return $this->nombre;    

    }
	 public function getTipo() {
        return $this->tipo;    

    }
	    public function setId($id) {
        $this->id = $id;
       
    }
	 public function setGarantia($garantia) {
        $this->garantia = $garantia;
       
    }
	 public function setMarca($marca) {
        $this->marca = $marca;
       
    }
	 public function setModelo($modelo) {
        $this->modelo = $modelo;
       
    }
	 public function setNombre($nombre) {
        $this->nombre = $nombre;
       
    }
	 public function setTipo($tipo) {
        $this->tipo = $tipo;
       
    }
	 
   
	
}
  

?>