<?php  
class modelcontact extends CI_Model 
{
/*public function contactselect(){

	$contactquery=$this->db->query("select * from contact");
	echo $contactquery->num_rows();
}*/
public function contactinsert($contactdata){

	$contactquery=$this->db->insert('contact',$contactdata);
	//echo $contactquery->num_rows();
}
}

?>