<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

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
    }

	public function index()
	{
		$this->load->view('homeheader');
		$this->load->view('vcontact');
		$this->load->view('homefooter');
	}

	public function validcontact(){

		$fname = $this->input->post('fname');
		$lname = $this->input->post('lname');
		$email = $this->input->post('email');
		$topic = $this->input->post('topic');
		$message = $this->input->post('message');

		$this->form_validation->set_error_delimiters('<div class="validatestyle">', '</div>');
		$this->form_validation->set_rules('fname', 'fname','required|regex_match[/^[a-zA-z\.\-\s]+$/]');
		$this->form_validation->set_rules('lname', 'lname','required|regex_match[/^[a-zA-z\.\-\s]+$/]');
		$this->form_validation->set_rules('email', 'email','required|valid_email');
		$this->form_validation->set_rules('topic', 'topic','required|regex_match[/^[a-zA-z0-9\.\-\s]+$/]');
		$this->form_validation->set_rules('message', 'message','required|regex_match[/^[a-zA-z0-9\.\-\s]+$/]');
		if ($this->form_validation->run() == FALSE)
		{
		$this->load->view('homeheader');
		$this->load->view('vcontact');
		$this->load->view('homefooter');
		}
		else
		{
			$contactdata = array(
	            'Firstname' => $fname,
	            'Lastname' => $lname,
	            'email' => $email,
	            'Topic' => $topic,
	            'Message'=> $message    
	        );
		$this->Modelcontact->contactinsert($contactdata);
		$this->load->view('homeheader');
		$this->load->view('vcontact');
		$this->load->view('homefooter');
		}

	}
	
}
?>
