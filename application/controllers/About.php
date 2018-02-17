<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class About extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data["title"]="About";
		$data["css"]="about.css";
		$data["js"]="about.js";
		$this->load->view('template/head.php',$data);
		$this->load->view('about/index.php');
		$this->load->view('template/end.php',$data);
    }
}
?>