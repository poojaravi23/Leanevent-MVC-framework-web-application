<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homeagent extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->helper('form');
        $this->load->helper('url');  
        $this->load->library('session'); 

    }
public function index()
	{
 		//$fetchevent['eventlog']=$this->Modellogin->loginhome();
		$this->load->view('ageheader');
		$this->load->view('vhomeagent');  
		$this->load->view('userfooter');

	}
public function volselect(){
	
	    $voldata['eventlog']=$this->Modelhomeagent->selectvolquery();

		$this->load->view('ageheader');
		$this->load->view('vlistindividual',$voldata);  
		$this->load->view('userfooter');

}
public function busselect(){
	
	    $busdata['eventlog']=$this->Modelhomeagent->selectbusquery();

		$this->load->view('ageheader');
		$this->load->view('vlistbusiness',$busdata);  
		$this->load->view('userfooter');

}
public function validcomn(){

		$bus=$this->input->post('submit');	
		$comn =$this->input->post('comn['.$bus."".']');

		$this->form_validation->set_rules('comn['.$bus."".']','Commission','required|regex_match[/^[0-9]+$/]');
		
		$str_Split=explode("-",$this->input->post('submit'));
		$eventId=$str_Split[1];
		$busId =$str_Split[0];

		
	if ($this->form_validation->run() == FALSE)
		{
		$comnvalid['eventlog']=$this->Modelhomeagent->selectbusquery();
		$this->load->view('ageheader');
		$this->load->view('vlistbusiness',$comnvalid);
		$this->load->view('userfooter');
		}
	
	else{

		
		$this->Modelhomeagent->updatecomn($eventId,$busId,$comn);

		$comnvalid['eventlog']=$this->Modelhomeagent->selectbusquery();
		$this->load->view('ageheader');
		$this->load->view('vlistbusiness',$comnvalid);
		$this->load->view('userfooter');

	}
}
public function eveselect(){
	
	    $evedata['eventlog']=$this->Modelhomeagent->selectevequery();

		$this->load->view('ageheader');
		$this->load->view('vlistevents',$evedata);  
		$this->load->view('userfooter');

}
public function ageprofile()
	{

		$emailid=$_SESSION['email'];


		$profileid['agentprofile']=$this->Modelhomeagent->ageprofile($emailid);

		$this->load->view('ageheader');
		$this->load->view('vageprofile',$profileid);  
		$this->load->view('userfooter');

	}
	public function validageprofile(){

		$profilevalid['agentprofile'] = $this->input->post('telephone');
		$profilevalid['agentprofile'] = $this->input->post('password');
		

		$this->form_validation->set_error_delimiters('<div class="validatestyle">','</div>');
		$this->form_validation->set_rules('telephone', 'telephone','required|regex_match[/^\(?([0-9]{3})\)?[-.]?([0-9]{3})[-. ]?([0-9]{4})$/]');
		$this->form_validation->set_rules('password', 'password','required|regex_match[/^[a-zA-Z0-9\*\#\@]{8,}$/]');
		$emailid=$_SESSION['email'];

		if ($this->form_validation->run() == FALSE)
		{

		$profileid['agentprofile']=$this->Modelhomeagent->ageprofile($emailid);
		$this->load->view('ageheader');
		$this->load->view('vagentprofile',$profileid);
		$this->load->view('userfooter');
		}
		else
		{
			
				//$profilevalid['individualprofile'] = 
				//$profilevalid['individualprofile'] = $this->input->post('password');
				
				$emailid=$_SESSION['email'];
				$updatearray=array(
				'Telephone'=>$this->input->post('telephone'),
				'Password'=>$this->input->post('password')
				);

				
				$this->Modelhomeagent->ageupdate($emailid,$updatearray);

				$profileid['agentprofile']=$this->Modelhomeagent->ageprofile($emailid);
				$this->load->view('ageheader');
				$this->load->view('vagentprofile',$profileid);
				$this->load->view('userfooter');

			}
		
	}
	public function validaddevent(){

		$ename = $this->input->post('ename');
		$respo = $this->input->post('respo');
		$place = $this->input->post('place');
		$edate=$this->input->post('edate');
		$etime=$this->input->post('etime');

		$price = $this->input->post('price');
		

		$this->form_validation->set_error_delimiters('<div class="validatestyle">', '</div>');
		$this->form_validation->set_rules('ename', 'ename','required|regex_match[/^[a-zA-z\.\-\s]+$/]');
		$this->form_validation->set_rules('respo', 'respo','required|regex_match[/^[a-zA-z0-9\.\-\s]+$/]');
		$this->form_validation->set_rules('place', 'place','required|regex_match[/^([a-zA-Z0-9\/\.\,\&\#\s]+[a-zA-Z0-9]+)+$/]');
		$this->form_validation->set_rules('price', 'price','required|regex_match[/^\d{1,}[\.]?\d{1,}$/]');
		
		if ($this->form_validation->run() == FALSE)
		{
		$this->load->view('ageheader');
		$this->load->view('vaddevent');
		$this->load->view('userfooter');
		}
		else
		{
			$addeventdata = array(
	            'Eventname' => $ename,
	            'Responsible' => $respo,
	            'Place' => $place,
	            'Date' => $edate,
	            'Time' => $etime,
	            'Ticket_value' => $price
	               
	        );
		$this->Modelhomeagent->addeventinsert($addeventdata);
		$this->load->view('ageheader');
		$this->load->view('vaddevent');
		$this->load->view('userfooter');
		}

	}
	public function selectmodify(){
		//echo "am in modify";
		$eventid=$this->input->post('modsubmit');
		$edata['modifyevent']=$this->Modelhomeagent->modifyselect($eventid);

		$this->load->view('ageheader');
		$this->load->view('vmodify',$edata);
		$this->load->view('userfooter');

	}
	public function validmodify(){

		$ename = $this->input->post('ename');
		$respo = $this->input->post('respo');
		$place = $this->input->post('place');
		$edate=$this->input->post('edate');
		$etime=$this->input->post('etime');
		$price = $this->input->post('price');
		$eventid=$this->input->post('modsubmit');

		$eventid=$this->input->post('gsubmit');
		$edata['modifyevent']=$this->Modelhomeagent->modifyselect($eventid);
		

		$this->form_validation->set_error_delimiters('<div class="validatestyle">', '</div>');
		$this->form_validation->set_rules('ename', 'ename','required|regex_match[/^[a-zA-z\.\-\s]+$/]');
		$this->form_validation->set_rules('respo', 'respo','required|regex_match[/^[a-zA-z0-9\.\-\s]+$/]');
		$this->form_validation->set_rules('place', 'place','required|regex_match[/^([a-zA-Z0-9\/\.\,\&\#\s]+[a-zA-Z0-9]+)+$/]');
		$this->form_validation->set_rules('price', 'price','required|regex_match[/^\d{1,}[\.]?\d{1,}$/]');
		
		if ($this->form_validation->run() == FALSE)
		{
			 
		$this->load->view('ageheader');
		$this->load->view('vmodify',$edata);
		$this->load->view('userfooter');
		}
		else
		{
			$modupd = array(
	            'Eventname' => $ename,
	            'Responsible' => $respo,
	            'Place' => $place,
	            'Date' => $edate,
	            'Time' => $etime,
	            'Ticket_value' => $price
	               
	        );
		$this->Modelhomeagent->modifyeventupdate($modupd,$eventid);
		 $evedata['eventlog']=$this->Modelhomeagent->selectevequery();

		$this->load->view('ageheader');
		$this->load->view('vlistevents',$evedata);  
		$this->load->view('userfooter');
		/*$this->load->view('ageheader');
		$this->load->view('vlistevents',$edata);
		$this->load->view('userfooter');*/
		}

	}
	public function deleteupdate(){
		$eventid=$this->input->post('delsubmit');
		$this->Modelhomeagent->deleteeventupdate($eventid);
		
		$evedata['eventlog']=$this->Modelhomeagent->selectevequery();

		$this->load->view('ageheader');
		$this->load->view('vlistevents',$evedata);  
		$this->load->view('userfooter');

	}


}
?>
