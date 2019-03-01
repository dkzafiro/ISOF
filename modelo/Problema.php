<?php
class Problema{
private $producto;
private  $descripcion;

function __construct() 
    { 
        $a = func_get_args(); 
        $i = func_num_args(); 
        if (method_exists($this,$f='__construct'.$i)) { 
            call_user_func_array(array($this,$f),$a); 
        } 
    } 

public function __construct1($descripcion, $producto){	
	$this->descripcion=$descripcion;		
	$this->producto=$producto;
	}	


public function getDescripcion(){
        return $this->descripcion;    

    }
  public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;  
    }
	public function getProducto(){
        return $this->producto;    

    }
  public function setProducto($producto) {
        $this->producto = $producto;  
    }			
	
}


?>