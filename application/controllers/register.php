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
		echo "working";
	}
}
?>