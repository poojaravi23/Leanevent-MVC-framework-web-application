<?php
class modelbuy extends CI_Model 
{
    public function selectbuy(){

	$buyquery=$this->db->query("SELECT EventID,Eventname,Image,Ticket_value FROM events ");
	return $buyquery;
	}

	public function buyevent($eventid){

		$buycartquery=$this->db->query("SELECT * FROM events where EventID='$eventid';");
		return $buycartquery;
	}

public function buyinsert($buyconfirmdata){

	$buyinsertquery=$this->db->insert('buy_from_us',$buyconfirmdata);
	
}
}

?>