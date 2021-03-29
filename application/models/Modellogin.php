<?php  
class modellogin extends CI_Model 
{
	public function existind($email,$passwordU){
	$existquery=$this->db->query("SELECT * FROM login WHERE email='$email' and password='$passwordU';");
	return $existquery->num_rows();
	}
	public function loginuser($email,$passwordU){
	$loginquery=$this->db->query("SELECT * FROM login WHERE email='$email' and password='$passwordU';");
	return $loginquery;
}

	public function loginhome(){
		$logineventquery=$this->db->query("SELECT * FROM events ;");
		return $logineventquery;

	}
}
?>
