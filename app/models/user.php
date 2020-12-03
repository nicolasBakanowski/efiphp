<?php
require ('../connection.php');
class User extends mysqli{
	//atributos
	
	function newuser(userdto $user){
		$con = new Connectdto;
		$db = new Connection($con);
		$results = $db->conect();
		var_dump($user->Name);
		$string = "INSERT INTO blog_itec_2020.users (`name`,`lastname` ,`email`, `password`, `is_admin`, `is_active`)
		VALUES ('$user->Name','$user->LastName','$user->email', '$user->pass', '$user->is_admin','$user->is_active');";
		$results->query($string);
	
	}

	function login($email,$pass){
		$con = new Connectdto;
		$db = new Connection($con);
		$results = $db->conect();
		$consulta = mysqli_query($results,"SELECT * FROM users WHERE email = '$email' AND password  = '$pass'");
		$resultado = mysqli_num_rows($consulta);		
		if ($resultado > 0){ 
			$data = mysqli_fetch_array($consulta);
			session_start();
			$_SESSION['active'] = true;
			$_SESSION['iduser'] = $data['id'];
			$_SESSION['nameuser'] = $data['name'];
			$_SESSION['lastnameuser'] = $data['lastname'];
			$_SESSION['email'] = $data['email'];
			header('location: ../index.php');
		}else{
			echo ('no entro');
		}
		
	}
	
}
?>