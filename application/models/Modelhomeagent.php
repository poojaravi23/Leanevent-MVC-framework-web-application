<?php  
class modelhomeagent extends CI_Model 
{
	public function selectvolquery(){
	$selectvol= $this->db->query("SELECT I.Photo, I.Firstname, I.Lastname, I.email, I.Telephone, E.Eventname, E.Responsible FROM individual as I,events as E, volunteers_individual as VI WHERE VI.IndividualID=I.IndividualID AND VI.EventID=E.EventID;");
		return $selectvol;
	}
	public function selectbusquery(){
	$selectbus= $this->db->query("SELECT B.Logo, B.Foundation_name, E.Eventname, E.Responsible,VB.Commission, VB.EventID, B.BusinessID FROM business as B,events as E, volunteers_business as VB WHERE VB.BusinessID=B.BusinessID AND VB.EventID=E.EventID;");
	return $selectbus;
	}

	public function updatecomn($eventid,$busid,$editvar){
	$comnupd=$this->db->query("UPDATE `volunteers_business` SET `Commission`='$editvar' WHERE `EventID`='$eventid' and `BusinessID`='$busid';");
	return $comnupd;
	}

	public function selectevequery(){
		$selecteve=$this->db->query("SELECT `EventID`, `Image`,`Eventname`, `Place`, `Date` FROM `events`;");
		return $selecteve;

	}

	public function addeventinsert($eventdata){
	$insertevent=$this->db->insert('events',$eventdata);
	return $insertevent;
	}


	public function modifyselect($eventid){
		$selectmod=$this->db->query("SELECT * FROM `events` WHERE `EventID`='$eventid';");
		return $selectmod;

	}
    public function modifyeventupdate($modupd,$eventid){
		 $modifyupdate=$this->db->update('events', $modupd, "EventID = '$eventid'");
		 return $modifyupdate;
	}

	public function deleteeventupdate($eventid){
		return $this->db->delete('events', array('EventID' => $eventid));
	}




	public function ageprofile($email){

	$profileselect=$this->db->query("SELECT * FROM agent where email='$email';");
	return $profileselect;
	}

	public function ageupdate($email,$updatearray){
	if(($this->db->query("UPDATE `agent` SET Telephone='".$updatearray['Telephone']."', Password='".$updatearray['Password']."' WHERE email='$email';"))==true){
		$this->db->query("UPDATE `login` SET Password='".$updatearray['Password']."' WHERE `email`='$email';");
	}

}

}
	?>