<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homeindividual extends CI_Controller {

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
  		$fetchevent['eventlog']=$this->Modellogin->loginhome();
		$this->load->view('userheader');
		$this->load->view('vhomeindividual',$fetchevent);  
		$this->load->view('userfooter');

	}

	public function individualinsert(){
		$edata= $this->input->post('submit');
		$idata=$_SESSION['email'];
		 
		$indid=$this->Modelhomeindividual->individualid($idata);		
		
		$individualdata = array(
	            'EventID'=> $edata,
	            'IndividualID'=>$indid
	             
	        );

		if($this->Modelhomeindividual->homeindinsert($individualdata)){
			$fetchevent['popid']="individualinsert#confirmPop";
			$fetchevent['eventlog']=$this->Modellogin->loginhome();
			$this->load->view('userheader');
			$this->load->view('vhomeindividual',$fetchevent);  
			$this->load->view('userfooter');
		}
		else{
			$fetchevent['popid']="individualinsert#regPop";
			$fetchevent['eventlog']=$this->Modellogin->loginhome();
			$this->load->view('userheader');
			$this->load->view('vhomeindividual',$fetchevent);  
			$this->load->view('userfooter');
		}

	}

	public function indprofile()
	{

		$emailid=$_SESSION['email'];


		$profileid['individualprofile']=$this->Modelhomeindividual->indprofile($emailid);

		$this->load->view('userheader');
		$this->load->view('vindividualprofile',$profileid);  
		$this->load->view('userfooter');

	}
	public function validindprofile(){

		$profilevalid['individualprofile'] = $this->input->post('telephone');
		$profilevalid['individualprofile'] = $this->input->post('password');
		

		$this->form_validation->set_error_delimiters('<div class="validatestyle">','</div>');
		$this->form_validation->set_rules('telephone', 'telephone','required|regex_match[/^\(?([0-9]{3})\)?[-.]?([0-9]{3})[-. ]?([0-9]{4})$/]');
		$this->form_validation->set_rules('password', 'password','required|regex_match[/^[a-zA-Z0-9\*\#\@]{8,}$/]');
		$emailid=$_SESSION['email'];

		if ($this->form_validation->run() == FALSE)
		{

		$profileid['individualprofile']=$this->Modelhomeindividual->indprofile($emailid);
		$this->load->view('userheader');
		$this->load->view('vindividualprofile',$profileid);
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


				
				$this->Modelhomeindividual->indupdate($emailid,$updatearray);

				$profileid['individualprofile']=$this->Modelhomeindividual->indprofile($emailid);
				$this->load->view('userheader');
				$this->load->view('vindividualprofile',$profileid);
				$this->load->view('userfooter');

			}
		
	}
}
?>
