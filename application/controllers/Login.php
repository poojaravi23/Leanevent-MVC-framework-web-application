<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
		$this->load->view('homeheader');
		$this->load->view('vlogin');  
		$this->load->view('homefooter');
	}
	public function validlogin(){

		$email = $this->input->post('email');
		$password = $this->input->post('password');
		

		$this->form_validation->set_error_delimiters('<div class="validatestyle">', '</div>');
		$this->form_validation->set_rules('email', 'email','required|valid_email|callback_existcheck');
		$this->form_validation->set_rules('password', 'password','required');
		
	
		if ($this->form_validation->run() == FALSE)
		{
		$this->load->view('homeheader');
		$this->load->view('vlogin');
		$this->load->view('homefooter');
		}
		else
		{
			$this->loginpage();
		}
	}

	public function existcheck($emailcheck){

		$passwordcheck=$this->input->post('password');

		if($this->Modellogin->existind($emailcheck,$passwordcheck)==0){
			$this->form_validation->set_message('existcheck','Invalid username/password');
			return false;
		}
		else{
			return true;
		}
	}

	public function loginpage(){

		$email = $this->input->post('email');
		$pwd = $this->input->post('password');

		$logindata= $this->Modellogin->loginuser($email,$pwd)->row();
        $user_role=$logindata->role;
        //echo $user_role;
		$this->session->set_userdata('userole', $user_role);
		$this->session->set_userdata('email', $email);
		$fetchevent['eventlog']=$this->Modellogin->loginhome();

		if ($user_role=='Individual') {

			$this->load->view('userheader');
			$this->load->view('vhomeindividual',$fetchevent);  
			$this->load->view('userfooter');
			# code...
		}
		elseif($user_role=='Business') {

			$this->load->view('busheader');
			$this->load->view('vhomebusiness',$fetchevent);  
			$this->load->view('userfooter');
			# code...
		}
		elseif($user_role=='Agent'){
			$this->load->view('ageheader');
			$this->load->view('vhomeagent',$fetchevent);  
			$this->load->view('userfooter');
		}


	}

}
?>
