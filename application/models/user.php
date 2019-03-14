<?php  
/**
 * 
 */
class User extends CI_Model
{
	
	public function getUser($user='',$pass ='')
	{


		$link = mysqli_connect("localhost", "root", "", "imagen");

$query= mysqli_query($link,"SELECT * FROM usuario WHERE user= '$user' AND pass ='$pass'");
//$query1= mysqli_query($link,"SELECT user FROM usuarios WHERE pass= '$pass' "); 

if (mysqli_num_rows($query)>0){
return $query->row();

$user="user" ;
}
else {
	return null;
}
		
	}
}


?>