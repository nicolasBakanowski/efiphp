<?php
require ('../models/user.php');
include '../librarys/dto/userdto.php';


if (isset($_GET['action']) && $_GET['action']=='login'){
    require('../views/users/login.php');
}
if (isset($_GET['action']) && $_GET['action']=='register'){
    require('../views/users/register.php');
   
}

#logear usuario 

if (isset($_POST['action']) && $_POST['action']=='login'){
    $name = $_POST['email'];
	$pass = $_POST['password'];
    $user = new User();
    $user->login($name, $pass);
    
}


#registrar un usuario
if (isset($_POST['action']) && $_POST['action']=='register'){
    $dto = new UserDto(); # creo la clase para pasar 1 solo parametro a la funcion newuser
    $user = new User();
    $dto->name  = $_POST['name'];
    $dto->lastname = $_POST['lastname'];
    $dto->email = $_POST['email'];
    #$dto->pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $dto->pass =$_POST['password'];
    $dto->datatype = date("Y-m-d H:i:s");    
    $user->newuser($dto);
    
    //password_verify(passwordString,$passwordDB));

}
if($_POST['action'] =='logout'){
    session_start();
    if(session_destroy()){ // Destroying All Sessions {
        header("Location: index.php");

    }   
}
?>