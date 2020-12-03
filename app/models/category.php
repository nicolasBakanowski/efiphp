<?php
require ('../connection.php');
require ('../librarys/dto/connectdto.php');
class Category extends mysqli{
    //atributos
   
    
    function newcategory($name,$rutaimagen){
        $con = new Connectdto;
        $db = new Connection($con);
        
        $results=$db->conect();
        $string = "INSERT INTO blog_itec_2020.categories (`name`,`image`) VALUES ('$name','$rutaimagen')";
        $results->query($string);
    }

	
}
?>