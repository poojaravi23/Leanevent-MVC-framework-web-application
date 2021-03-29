<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
   

    public function mailsent(){
 		$to_email = $this->input->post('subscribe');
 		$config = Array(
		    'protocol' => 'smtp',
		    'smtp_host' => 'ssl://smtp.googlemail.com',
		    'smtp_port' => 465,
		    'smtp_user' => 'wleanevento@gmail.com',
		    'smtp_pass' => 'Wdm@9876',
		    'mailtype'  => 'html', 
		    'charset'   => 'iso-8859-1'
		    /*'protocol' => 'mail',
		    'smtp_host' => 'ssl://smtp.googlemail.com',
		    'smtp_port' => 465,
		    'smtp_user' => 'wleanevento@gmail.com',
		    'smtp_pass' => 'Wdm@9876',
		    'mailtype'  => 'html', 
		    'Charset'   => 'utf-8',
		    'newline'=>"\r\n"*/
		);
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");

		// Set to, from, message, etc.
		$this->email->from('wleanevento@gmail.com','wdm leanevent');
        $this->email->to($to_email); 

        $this->email->subject('Subscribed!!');
        $this->email->message('You have succesfully registered to the Leanevent bulletin. Thank you!');  

		$result = $this->email->send();
		if($result){
		//echo "mail sent";
		}
		else{
		echo "not sent";
		}
		$this->load->view('homeheader');
		$this->load->view('vhome');
		$this->load->view('homefooter');
	}

	public function index()
	{
		$this->load->view('homeheader');
		$this->load->view('vhome');
		$this->load->view('homefooter');
	}
}
?>
