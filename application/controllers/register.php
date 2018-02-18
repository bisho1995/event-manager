<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller
{
	private $functions;
	public function __construct()
	{
		parent::__construct();
		$this->functions=new Functions();
	}
    public function index()
    {
        $data["title"]="Register";
		$data["css"]="register.css";
		$data["js"]="register.js";
		$this->load->view('template/head.php',$data);
		$this->load->view('register/index');
		$this->load->view('template/end.php',$data);
	}
	
	public function register_new_team()
	{
		$this->functions->check_if_page_actually_refered_from(base_url().'register');
		$this->output->set_content_type('application/json');
		$this->load->library('form_validation');
		$this->load->database();
		$this->form_validations();
	}

	private function form_validations()
	{
		$this->form_validation->set_rules('fullname','Full Name','required|min_length[4]|max_length[20]');
		$this->form_validation->set_rules('email','Email','required|min_length[4]|max_length[20]|valid_email');
		$this->form_validation->set_rules('teamname','Team Name','required|min_length[4]|max_length[20]');
		$this->form_validation->set_rules('password','Team Name','required|min_length[4]|max_length[20]');
		$this->form_validation->set_rules('confirm_password','Team Name','required|min_length[4]|max_length[20]|matches[password]');
		if($this->form_validation->run()== FALSE)
		{
			$this->display_error_message_as_form_is_not_validated();
		}
		else
		{
			$this->proceed_to_add_data_to_database();
		}

	}

	private function display_error_message_as_form_is_not_validated()
	{
		echo json_encode(array("error",validation_errors('<span>','</span>')));
	}

	private function proceed_to_add_data_to_database()
	{
		$this->db->trans_start();
		
		$this->db->trans_complete();
	}
}
?>