<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Login extends CI_Controller
{
	
	public function index()
	{
		$this->load->view('log');
	}



	public function valida()
	{
		$link = mysqli_connect("localhost", "root", "", "imagen");
$this->load->library('session');

  
	$this->load->helper("form");
if($this->input->post()){
	session_destroy();
    session_start();
    //session_destroy();
$user =$_POST["user"];
$pass =$_POST["pass"];

$this->load->model('user');

$query= mysqli_query($link,"SELECT * FROM usuario WHERE user= '$user' AND pass='$pass'");
$query1= mysqli_query($link,"SELECT user FROM usuarios WHERE pass= '$pass' "); 

if(mysqli_num_rows($query)>0){
      
       
       $_SESSION['user'] = ['user'];
        
       
       $this->load->view('cargar_persona');
        
  
} 

else {


  echo'
     <script>
        alert("Datos erroneos");
       location.href="<?php echo base_url();?>login";
       </script>
';

  
  }

}

	}


public function p()
	{
		if (isset($_SESSION["user"])) {
	
	$this->load->view('cargar_persona');
} else{

header("Location: <?php echo base_url();?>login");
	}

}

		
public function e()
	{
		
	
		
				if (isset($_SESSION["user"])) {
	$this->load->view('cargar_empresa');
	
} 
else{

header("Location: <?php echo base_url();?>login");
	}

	
	}



public function insert_img(){

$config['upload_path'] = './cargas/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '2048';
        $config['max_width'] = '2024';
        $config['max_height'] = '2008'; 

        $this->load->library('upload',$config);
         if (!$this->upload->do_upload("fileImagen")) {
            $data['error'] = $this->upload->display_errors();
			$this->load->view('cargar');
			
        } else {




  $file_info = $this->upload->data();

           $link = mysqli_connect("localhost", "root", "", "imagen");
$user1 = htmlspecialchars(trim($_POST['nombre']));
$ap_p1 = htmlspecialchars(trim($_POST['ap_p']));

$id_img1 = htmlspecialchars(trim($_POST['id_img']));
$email1 = htmlspecialchars(trim($_POST['email']));
$imagen = htmlspecialchars(trim($file_info['file_name']));
            
            
$query= mysqli_query($link,"SELECT id_img FROM img_personas WHERE id_img = '$id_img1' ");
//$result = mysqli_db_query($datos[3],$query,$link);
if(mysqli_num_rows($query)){

  echo'
    <script>
      alert("El id de imagen ya existe ");
     
    location.href= "http://localhost:8080/Donaunarbol/Login/p";
     
    </script>


';

 
  } 


else {

mysqli_query($link, "INSERT INTO img_personas (nom_p, apellido_p, url_img, id_img, correo) 
	VALUES('$user1','$ap_p1','$imagen', '$id_img1','$email1')") or die("<h2>Error Guardando los datos</h2>");
  

echo'
    <script>
      alert("Datos guardados");
     location.href= "http://localhost:8080/Donaunarbol/login/p";
    </script>
';


}
}

}

public function insert_emp(){

$config['upload_path'] = './cargas/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '2048';
        $config['max_width'] = '2024';
        $config['max_height'] = '2008'; 

        $this->load->library('upload',$config);
         if (!$this->upload->do_upload("fileImagen")) {
            $data['error'] = $this->upload->display_errors();
			$this->load->view('cargar');
			
        } else {




  $file_info = $this->upload->data();

           $link = mysqli_connect("localhost", "root", "", "imagen");
$name = htmlspecialchars(trim($_POST['nombre']));
$id_img1 = htmlspecialchars(trim($_POST['id_img']));
$email1 = htmlspecialchars(trim($_POST['email']));
$imagen = htmlspecialchars(trim($file_info['file_name']));
            
            
$query= mysqli_query($link,"SELECT id_img FROM img_emp WHERE id_img = '$id_img1' ");
//$result = mysqli_db_query($datos[3],$query,$link);
if(mysqli_num_rows($query)){

  echo'
    <script>
      alert("El id de imagen ya existe ");
     
    location.href= "http://localhost:8080/Donaunarbol/login/e";
     
    </script>
';
 
  } 


else {

mysqli_query($link, "INSERT INTO img_emp (nombre_emp, id_img, correo,  url_img) 
	VALUES('$name', '$id_img1','$email1','$imagen')") or die("<h2>Error Guardando los datos</h2>");
  

echo'
    <script>
      alert("Datos guardados");
     location.href= "http://localhost:8080/Donaunarbol/login/e";
    </script>
';


}
}

}

public function salir(){


session_start();
session_destroy();
header("Location: <?php echo base_url();?>login");
exit();

}


}