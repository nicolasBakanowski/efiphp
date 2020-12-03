<?php
require ('../connection.php');
class Post extends mysqli{

	
	function newpost(postdto $post){
		session_start();
		$con = new Connectdto;
		$db = new Connection($con);
		$results = $db->conect();
		$post->author_id = intval($_SESSION['iduser']);
		$string = "INSERT INTO blog_itec_2020.posts(`name`,`short_brief`,`body` ,`category_id`, `image`, `author_id`, `is_active`)
		VALUES ('$post->name','$post->short_brief','$post->body', '$post->category_id', '$post->image','$post->author_id','$post->is_active');";
		var_dump($string);		
		$results->query($string);
	}
}
?>