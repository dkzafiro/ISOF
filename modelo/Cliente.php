<?php
include('Persona.php');
include('Producto.php');
$producto = new Producto();

  class Cliente extends Persona
{

    private $telefono;
    private $email;
    private $direccion;
	private $producto;
	private $fecha;
	
  function __construct() 
    { 
        $a = func_get_args(); 
        $i = func_num_args(); 
        if (method_exists($this,$f='__construct'.$i)) { 
            call_user_func_array(array($this,$f),$a); 
        } 
    } 
	
    public function __construct1($telefono,$email,$direccion,$producto){
        parent::__construct();
        $this->telefono = $telefono;
        $this->email = $email;
        $this->direccion = $direccion;
		$this->producto=$producto;
      
    }
	public function __construct2($telefono,$email,$direccion){
        parent::__construct();
        $this->telefono = $telefono;
        $this->email = $email;
        $this->direccion = $direccion;

    }
	
    public function getApellido() {
        return $this->apellidos;    

    }
    public function getTelefono() {
        return $this->telefono;
       
    }
    public function getEmail() {
        return $this->email;
       
    }
    public function getDireccion() {
        return $this->direccion;
       
    }
	public function getFecha() {
        return $this->fecha;
       
    }
    
     public function setTelefono($telefono) {
        $this->telefono = $telefono;
       
    }
     public function setEmail($email) {
        $this->email = $email;
       
    }
	 public function setDireccion($direccion) {
        $this->direccion = $direccion;
       
    } 
	
	public function getProducto() 
	{
		$producto = new ArrayObject($producto);
        return $pruducto;
       
    }
	public function setProducto($producto) {
        $this->producto = $producto;
       
    } 
	
	
	public function agregarFechaServicio($fecha){
		
		$this->fecha=$fecha;
		
	}
	
	
	
	

}



?>