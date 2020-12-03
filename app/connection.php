<?php
/* en librarys/dto/connectdto.php encontramos el archivo para pasarle los datos de conexion*/


class Connection extends mysqli {
	private $db_host;
	private $db_user;
	private $db_pass;
	private $db_name;
	
		
	public function __construct(Connectdto $con){
		$this->db_host = $con->db_host;
		$this->db_user = $con->db_user;
		$this->db_pass = $con->db_pass;
		$this->db_name = $con->db_name;
	}
	 
	public function conect(){
		$connect = new mysqli($this->db_host,$this->db_user,$this->db_pass,$this->db_name);
		if (!$connect) {
			die("Connection failed: " . mysqli_connect_error());
		}
		return $connect;                
	}    		 
}	
?>