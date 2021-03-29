<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

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

		$this->form_validation->set_error_delimiters('<div class="validatestyle">', '</div>');
		$this->form_validation->set_rules('fname', 'fname','required|regex_match[/^[a-zA-z\.\-\s]+$/]');
		$this->form_validation->set_rules('lname', 'lname','required|regex_match[/^[a-zA-z\.\-\s]+$/]');
		$this->form_validation->set_rules('email', 'email','required|valid_email|callback_existcheck');
		$this->form_validation->set_rules('password', 'password','required|regex_match[/^[a-zA-Z0-9\*\#\@]{8,}$/]');
		$this->form_validation->set_rules('address', 'address','required|regex_match[/^([a-zA-Z0-9\/\.\,\&\#\s]+[a-zA-Z0-9]+)+$/]');
		$this->form_validation->set_rules('state', 'state', 'required|callback_statecheck');
		$this->form_validation->set_rules('city', 'city','required|regex_match[/^[a-zA-Z]+$/]');
		$this->form_validation->set_rules('postalcode', 'postalcode','required|regex_match[/^[0-9]{5}(?:-[0-9]{4})?$/]');    
    }

	public function index()
	{
		$this->load->view('homeheader');
		$this->load->view('vregister');
		$this->load->view('homefooter');
		//$this->load->view('vregister',$temp);
	}


	public function indvalidregister(){
		
		$fname = $this->input->post('fname');
		$lname = $this->input->post('lname');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$address = $this->input->post('address');
		$state = $this->input->post('state');
		$city=$this->input->post('city');
		$postalcode=$this->input->post('postalcode');


		if ($this->form_validation->run() == FALSE)
		{
		$temp= array('popupid'=>"indvalidregister#comoindividual");
		$this->load->view('homeheader');
		//$this->load->view('vregister');
		$this->load->view('homefooter');
		$this->load->view('vregister',$temp);
		}
		else
		{
			$indregisterdata = array(
	            'Firstname' => $fname,
	            'Lastname' => $lname,
	            'email' => $email,
	            'Password' => $password,
	            'Address'=> $address,
	            'City'=> $city,
	            'State'=> $state,
	            'Postalcode'=> $postalcode

	        );
		if($this->Modelregister->indregisterinsert($indregisterdata)){
			//echo "am in success of indi";
			$logindata=array(
				'email'=>$email,
				'password'=>$password,
				'role'=>"Individual");

			$this->Modelregister->logininsert($logindata);
			
		}
			$this->load->view('homeheader');
			$this->load->view('vregister');
			$this->load->view('homefooter');
		}
	}


	public function busvalidregister(){
		
		$fname = $this->input->post('fname');
		$lname = $this->input->post('lname');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$address = $this->input->post('address');
		$state = $this->input->post('state');
		$city=$this->input->post('city');
		$postalcode=$this->input->post('postalcode');
		$businesstype=$this->input->post('businesstype');




		if ($this->form_validation->run() == FALSE)
		{
		$temp= array('popupid'=>"busvalidregister#comofound");
		$this->load->view('homeheader');
		//$this->load->view('vregister');
		$this->load->view('homefooter');
		$this->load->view('vregister',$temp);
		}
		else
		{
			$busregisterdata = array(
	            'Firstname' => $fname,
	            'Lastname' => $lname,
	            'Business_type'=>$businesstype,
	            'email' => $email,
	            'Password' => $password,
	            'Address'=> $address,
	            'City'=> $city,
	            'State'=> $state,
	            'Postalcode'=> $postalcode

	        );
		if($this->Modelregister->busregisterinsert($busregisterdata)){
			//echo "am in success of indi";
			$logindata=array(
				'email'=>$email,
				'password'=>$password,
				'role'=>"Business");

			$this->Modelregister->logininsert($logindata);
			
		}
			$this->load->view('homeheader');
			$this->load->view('vregister');
			$this->load->view('homefooter');
		}
	}
	public function agentvalidregister(){
		
		$fname = $this->input->post('fname');
		$lname = $this->input->post('lname');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$address = $this->input->post('address');
		$state = $this->input->post('state');
		$city=$this->input->post('city');
		$postalcode=$this->input->post('postalcode');


		if ($this->form_validation->run() == FALSE)
		{
		$temp= array('popupid'=>"agentvalidregister#comoagent");
		$this->load->view('homeheader');
		//$this->load->view('vregister');
		$this->load->view('homefooter');
		$this->load->view('vregister',$temp);
		}
		else
		{
			$ageregisterdata = array(
	            'Firstname' => $fname,
	            'Lastname' => $lname,
	            'email' => $email,
	            'Password' => $password,
	            'Address'=> $address,
	            'City'=> $city,
	            'State'=> $state,
	            'Postalcode'=> $postalcode

	        );
		if($this->Modelregister->ageregisterinsert($ageregisterdata)){
			//echo "am in success of indi";
			$logindata=array(
				'email'=>$email,
				'password'=>$password,
				'role'=>"Agent");

			$this->Modelregister->logininsert($logindata);
			
		}
			$this->load->view('homeheader');
			$this->load->view('vregister');
			$this->load->view('homefooter');
		}
	}


	public function statecheck($stateVal){
		if($stateVal=='-1'){
			//echo "am here";
			$this->form_validation->set_message('statecheck','The State field is required');
			return false;
		}else{
			return true;
		}

	}
	public function existcheck($emailcheck){
		if($this->Modelregister->existind($emailcheck)==0){
			return true;
		}
			else{
				$this->form_validation->set_message('existcheck','The username already exists');
			return false;
			}

	}
}
?>
