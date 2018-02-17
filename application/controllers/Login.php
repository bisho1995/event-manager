<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	private $functions;

	public function __construct()
	{
		parent::__construct();
		$this->functions=new Functions();
		$this->functions->check_if_a_previous_session_exists();

	}

	public function index($page='')
	{
		$data["title"]="Login";
		$data["css"]="login.css";
		$data["js"]="login.js";
		$this->load->view('template/head.php',$data);
		$this->load->view('login/index.php');
		$this->load->view('template/end.php',$data);
	}


	public function verify_login()
	{
		$this->functions
				->check_if_page_actually_refered_from(base_url().'login');

		$this->output->set_header('Content-type: application/json');

		$this->check_validation_rules();
	}//end of verify login

	private function check_validation_rules()
	{
		$this->load_helpers_of_verify_login();
		$this->set_login_rules();

		if($this->form_validation->run()==FALSE)
		{
			$this->incompleteOrInvalidInputs();
		}
		else
		{
			$this->checkInputsOfVerifyLogin();
		}
	}
	private function checkInputsOfVerifyLogin()
	{
		$email=$this->input->post('email');
		$password=$this->input->post('password');
		$ar=array();
		$ar['success']=array('url'=>base_url().'admin/');
		echo json_encode($ar);
	}

	private function incompleteOrInvalidInputs()
	{
		$ar=array('error'=>array('message'=>'There are some errors with your username or password.'.validation_errors()));
		echo json_encode($ar);
	}

	private function set_login_rules()
	{
		$this->form_validation->set_rules('email','Email','trim|required|min_length[5]|max_length[20]|valid_email');
		$this->form_validation->set_rules('password','Password','required|trim|min_length[6]|max_length[20]');
	}//end of set login rules


	private function load_helpers_of_verify_login()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
	}//end of load_helpers_of_verify_login


	


	


	private function get_referer()
	{
		return $this->input->get_request_header('Referer',TRUE);
	}



}//end of login class
