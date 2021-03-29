<?php  
class modelhomebusiness extends CI_Model 
{


public function businessid($busid){

		$busselectquery=$this->db->query("SELECT `BusinessID` FROM business where email ='$busid';");
		return $busselectquery->row()->BusinessID;
	}



public function homebusinsert($businessdata){

	$eventid=$businessdata['EventID'];
	$busid=$businessdata['BusinessID'];

	$existslectquery=$this->db->query("SELECT `BusinessID`,`EventID` FROM volunteers_business where EventID='$eventid' and BusinessID='$busid';");


	if($existslectquery->num_rows()>0){
			
			return false;
		}
		else{
			//return true;
		$businsert=$this->db->insert('volunteers_business',$businessdata);
		return $businsert;
	}
}

public function busprofile($email){

	$profileselect=$this->db->query("SELECT * FROM business where email='$email';");
	return $profileselect;
}

public function busupdate($email,$updatearray){
	if(($this->db->query("UPDATE `business` SET Telephone='".$updatearray['Telephone']."', Password='".$updatearray['Password']."' WHERE email='$email';"))==true){
		$this->db->query("UPDATE `login` SET Password='".$updatearray['Password']."' WHERE `email`='$email';");
	}

}

	}