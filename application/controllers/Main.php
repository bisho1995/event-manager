<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$data["title"]="Event Manager";
		$data["css"]="event_manager.css";
		$data["js"]="event_manager.js";
		$this->load->view('template/head.php',$data);
		$this->load->view('welcome_message');
		$this->load->view('template/end.php',$data);
	}
}
