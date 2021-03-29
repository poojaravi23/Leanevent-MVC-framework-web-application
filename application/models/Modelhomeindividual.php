<?php  
class modelhomeindividual extends CI_Model 
{


public function individualid($indid){

		$indselectquery=$this->db->query("SELECT `IndividualID` FROM individual where email ='$indid';");
		return $indselectquery->row()->IndividualID;
	}



public function homeindinsert($individualdata){

	$eventid=$individualdata['EventID'];
	$indid=$individualdata['IndividualID'];

	$existslectquery=$this->db->query("SELECT `IndividualID`,`EventID` FROM volunteers_individual where EventID='$eventid' and IndividualID='$indid';");


	if($existslectquery->num_rows()>0){
			
			return false;
		}
		else{
			//return true;
		$indinsert=$this->db->insert('volunteers_individual',$individualdata);
		return $indinsert;
	}
}

public function indprofile($email){

	$profileselect=$this->db->query("SELECT * FROM individual where email='$email';");
	return $profileselect;
}

public function indupdate($email,$updatearray){
	if(($this->db->query("UPDATE `individual` SET Telephone='".$updatearray['Telephone']."', Password='".$updatearray['Password']."' WHERE email='$email';"))==true){
		$this->db->query("UPDATE `login` SET Password='".$updatearray['Password']."' WHERE `email`='$email';");
	}

}

	}