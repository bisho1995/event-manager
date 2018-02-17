<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Contact extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data["title"]="Contact";
		$data["css"]="contact.css";
		$data["js"]="contact.js";
		$this->load->view('template/head.php',$data);
		$this->load->view('contact/index.php');
		$this->load->view('template/end.php',$data);
    }
}
?>