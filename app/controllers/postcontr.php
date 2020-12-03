<?php
require ('../models/post.php');
include '../librarys/dto/postdto.php';

if (isset($_POST['action']) && $_POST['action']=='postear'){
    $post= new Post();
    $dto = new PostDto(); # creo la clase  dto para pasar 1 solo parametro a la funcion newuser
    $dto->name  = $_POST['name'];
    $dto->short_brief = $_POST['short_brief'];
    $dto->body = $_POST['body'];
    $post->newpost($dto);

}
if (isset($_POST['action']) && $_POST['action']=='verpost'){
    $con = new Connectdto;
	$db = new Connection($con);
	$results = $db->conect();
	$consulta = mysqli_query($results,"SELECT * FROM post ORDER BY update_at ASC;");
    $resultado = mysqli_num_rows($consulta);		
}   
