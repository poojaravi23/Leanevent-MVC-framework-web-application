<?php  
class modelregister extends CI_Model 
{
/*public function contactselect(){

	$contactquery=$this->db->query("select * from contact");
	echo $contactquery->num_rows();
}*/

public function existind($email){
	$existquery=$this->db->query("SELECT * FROM login WHERE email='$email'");
	return $existquery->num_rows();
}

public function indregisterinsert($indregisterdata){

	$indregisterquery=$this->db->insert('individual',$indregisterdata);
	//echo $contactquery->num_rows();
	return $indregisterquery;
}
public function busregisterinsert($busregisterdata){

	$busregisterquery=$this->db->insert('business',$busregisterdata);
	//echo $contactquery->num_rows();
	return $busregisterquery;
}
public function ageregisterinsert($ageregisterdata){

	$ageregisterquery=$this->db->insert('agent',$ageregisterdata);
	//echo $contactquery->num_rows();
	return $ageregisterquery;
}
public function logininsert($logindata){
	//echo "am here";
	$loginquery=$this->db->insert('login',$logindata);
	return $loginquery;
}
}

?>