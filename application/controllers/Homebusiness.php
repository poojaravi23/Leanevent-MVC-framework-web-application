
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Homebusiness extends CI_Controller {

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
		$this->load->view('busheader');
		$this->load->view('vhomebusiness',$fetchevent);  
		$this->load->view('userfooter');

	}

	public function businessinsert(){
		$edata= $this->input->post('submit');
		$bdata=$_SESSION['email'];
		 
		$busid=$this->Modelhomebusiness->businessid($bdata);		
		
		$businessdata = array(
	            'EventID'=> $edata,
	            'BusinessID'=>$busid
	             
	        );

		if($this->Modelhomebusiness->homebusinsert($businessdata)){
			$fetchevent['popid']="businessinsert#confirmPop";
			$fetchevent['eventlog']=$this->Modellogin->loginhome();
			$this->load->view('busheader');
			$this->load->view('vhomebusiness',$fetchevent);  
			$this->load->view('userfooter');
		}
		else{
			$fetchevent['popid']="businessinsert#regPop";
			$fetchevent['eventlog']=$this->Modellogin->loginhome();
			$this->load->view('busheader');
			$this->load->view('vhomebusiness',$fetchevent);  
			$this->load->view('userfooter');
		}

	}

	public function busprofile()
	{

		$emailid=$_SESSION['email'];


		$profileid['businessprofile']=$this->Modelhomebusiness->busprofile($emailid);

		$this->load->view('busheader');
		$this->load->view('vbusinessprofile',$profileid);  
		$this->load->view('userfooter');

	}
	public function validbusprofile(){

		$profilevalid['businessprofile'] = $this->input->post('telephone');
		$profilevalid['businessprofile'] = $this->input->post('password');
		

		$this->form_validation->set_error_delimiters('<div class="validatestyle">','</div>');
		$this->form_validation->set_rules('telephone', 'telephone','required|regex_match[/^\(?([0-9]{3})\)?[-.]?([0-9]{3})[-. ]?([0-9]{4})$/]');
		$this->form_validation->set_rules('password', 'password','required|regex_match[/^[a-zA-Z0-9\*\#\@]{8,}$/]');
		$emailid=$_SESSION['email'];

		if ($this->form_validation->run() == FALSE)
		{

		$profileid['businessprofile']=$this->Modelhomebusiness->busprofile($emailid);
		$this->load->view('busheader');
		$this->load->view('vbusinessprofile',$profileid);
		$this->load->view('userfooter');
		}
		else
		{
				//$profilevalid['businessprofile'] = $this->input->post('password');
				
				$emailid=$_SESSION['email'];
				$updatearray=array(
				'Telephone'=>$this->input->post('telephone'),
				'Password'=>$this->input->post('password')
				);

				$this->Modelhomebusiness->busupdate($emailid,$updatearray);

				$profileid['businessprofile']=$this->Modelhomebusiness->busprofile($emailid);
				$this->load->view('busheader');
				$this->load->view('vbusinessprofile',$profileid);
				$this->load->view('userfooter');

			}
	}
}
?>
