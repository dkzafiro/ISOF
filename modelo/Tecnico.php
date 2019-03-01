
<?php

include('Persona.php');
 class Cliente extends Persona
{
	
	 public function __construct(){
    	parent::__construct();
		
    }
	
	public function getCliente(){
        return $this->cliente;    

    }
	public function setCliente($cliente) {
        $this->cliente= $cliente;  
    }
   
    
}

?>
