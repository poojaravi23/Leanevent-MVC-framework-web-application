<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buy extends CI_Controller {

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
       // $this->load->library('email'); 
    }


	public function index()
	{
         //load the method of Model  
         $data['eventcol']=$this->Modelbuy->selectbuy();  
         //return the data in view  
         $this->load->view('vbuy', $data);   
		$this->load->view('homeheader');
		$this->load->view('homefooter');

	}
	function buycart(){

		$eventid = $this->input->post('ename');

		$bdata['eventcart']=$this->Modelbuy->buyevent($eventid);
	
		$this->load->view('homeheader');
		$this->load->view('vbuycart',$bdata);
		$this->load->view('homefooter');
		//echo "hiii";
	}

	 function cartconfirm(){

	 	$eventid = $this->input->post('cartbtn');
	 	$bdata['eventcart']=$this->Modelbuy->buyevent($eventid);
	 	$bdata['quantity']=$this->input->post('quantvalue');
	 	$this->load->view('homeheader');
		$this->load->view('vbuyconfirm',$bdata);
		$this->load->view('homefooter');

		//echo "confirm";
	}
	function validbuy(){

		$fname = $this->input->post('fname');
		$email = $this->input->post('email');
		$quantity=$this->input->post('quan');
		$eventid= $this->input->post('cartbtn');


		$this->form_validation->set_error_delimiters('<div class="validatestyle">', '</div>');
		$this->form_validation->set_rules('fname', 'fname','required|regex_match[/^[a-zA-z\.\-\s]+$/]');
		$this->form_validation->set_rules('email', 'email','required|valid_email');


		if($this->form_validation->run()==FALSE){
			$eventid = $this->input->post('cartbtn');
			$bdata['eventcart']=$this->Modelbuy->buyevent($eventid);
			$bdata['quantity']=$this->input->post('quan');
			$this->load->view('homeheader');
			$this->load->view('vbuyconfirm',$bdata);
			$this->load->view('homefooter');
			
			}
			
			else{
				$eventid = $this->input->post('cartbtn');
			 	$bdata['eventcart']=$this->Modelbuy->buyevent($eventid);
			 	$bdata['quantity']=$this->input->post('quan');
			 	$this->load->view('homeheader');
				$this->load->view('vbuyconfirm',$bdata);
				$this->load->view('homefooter');

				
				$buyconfirmdata = array(
						'EventID'=>$eventid,
			            'Number_of_entries' =>$quantity,
			            'Name' => $fname,
			            'email' => $email   
			        );
				

				$this->Modelbuy->buyinsert($buyconfirmdata);

				
			}
}


	
}
?>