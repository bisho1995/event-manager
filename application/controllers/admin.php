<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$functions=new Functions();
		$functions->kill_page_if_session_is_unavailable();
	}

	public function index($page='')
	{
		$this->load->view('admin/index');
	}
}
?>