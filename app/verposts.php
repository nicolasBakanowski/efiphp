<?php
require ('connection.php');
require ('librarys/dto/connectdto.php');
#function obtenerposts(){
    $con = new Connectdto;
	$db = new Connection($con);
	$results = $db->conect();
    $consulta = mysqli_query($results,"SELECT * FROM blog_itec_2020.posts ORDER BY DATE (updated_at) ASC");
    while ($fila = $consulta->fetch_assoc()) {
        var_dump($fila["name"]);
    }
    #$resultPost = $consulta->fetch_assoc();
    #var_dump($resultPost);
    #if(mysqli_num_rows($consulta) >= 1){
        #foreach($resultPost as $post) {
            #echo($post);
          /*  echo($post["short_brief"]);
            echo($post["body"]);
            echo($post["updated_at"]);
            echo('-------------------');*/
            
            
        
        #}
              
    
    
    