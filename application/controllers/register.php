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
		$this->form_validation->set_rules('email','Email','required|min_length[4]|max_length[50]|valid_email|is_unique[teams.email]');
		$this->form_validation->set_rules('teamname','Team Name','required|min_length[4]|max_length[20]');
		$this->form_validation->set_rules('password','Team Name','required|min_length[4]|max_length[20]');
		$this->form_validation->set_rules('confirm_password','Team Name','required|min_length[4]|max_length[20]|matches[password]');
		if($this->form_validation->run()== FALSE)
		{
			$this->send_error_status_to_sender(validation_errors('',''));
		}
		else
		{
			$this->proceed_to_add_data_to_database();
		}

	}

	private function send_error_status_to_sender($errors='')
	{
		echo json_encode(array("error" => array($errors)));
	}

	private function send_success_status_to_sender($success='')
	{
		echo json_encode(array("success" => array($success)));
	}

	private function proceed_to_add_data_to_database()
	{
		$this->db->trans_start();
		$this->add_team_data_to_database();
		$this->db->trans_complete();
		if($this->db->trans_status() == FALSE)
		{
			$this->send_error_status_to_sender('Sorry there was some problem with the registration.');
		}
		else
		{
			$this->send_success_status_to_sender('The team has been registered successfully.');
		}
	}
	private function add_team_data_to_database()
	{
		$data=array(
			'full_name' => $this->input->post('fullname'),
			'email' => $this->input->post('email'),
			'team_name'=> $this->input->post('teamname'),
			'password' => $this->input->post('password')
		);
		$this->db->insert('teams',$data);
	}
}
?>