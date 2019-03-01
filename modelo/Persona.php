<?php

  class Persona{
 private $apellido;
 private $nombre;
 private $identificacion;

function __construct() 
    { 
        $a = func_get_args(); 
        $i = func_num_args(); 
        if (method_exists($this,$f='__construct'.$i)) { 
            call_user_func_array(array($this,$f),$a); 
        } 
    } 
	
 public function __construct1($apellido,$nombre,$identificacion){
        $this->apellido = $apellido;
        $this->nombre = $nombre;
        $this->identificacion = $identificacion;
    }

    public function getNombre() {
        return $this->nombre;
       
    }
    public function getApellido() {
        return $this->apellido;
       
    }
    public function getIdentificacion() {
        return $this->identificacion;
       
    }
	
    public function setApellido($apellido) {
         $this->apellido= $apellido;
       
    }
	
    public function setNombre($nombre) {
         $this->nombre=$nombre;
       
    }
    
    public function setIdentificacion($identificacion) {
         $this->identificacion = $identificacion;
       
    }

}
	
?>