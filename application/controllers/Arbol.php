<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Arbol extends CI_Controller {

	
	public function index()
	{
		
		$this->load->helper("form");
if($this->input->post()){
	
    
$name =$_POST["name"];
$email =$_POST["email"];
$pais = $_POST["pais"];

$frase = $_POST["frase"];
 $pago = $_POST["pago"];


if($pago=="paypal"){
      
       header ("Location: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=8W5769HHW6MXU");
      
 
       
      
 } 

else {


  echo'
     Enviar a banco
';

  
  }


//$this->load->model('user');
	
}
}

}