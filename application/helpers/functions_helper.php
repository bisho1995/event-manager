<?php defined("BASEPATH") or exit("No direct script access allowed");




class Functions
{
	private $CI;

	public function __construct()
	{
		$this->CI=& get_instance();
	}

	public function check_if_page_actually_refered_from($url)
	{
		$this->CI->load->library('user_agent');
		$referrer=$this->CI->agent->referrer();
		if($referrer == NULL || $referrer != $url)
		{
			exit("No direct script allowed ");
		}
	}

	

	public function check_existing_session()
	{
		$sessionId=$this->get_session_id();
		if($this->is_valid($sessionId))
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	public function kill_page_if_session_is_unavailable()
	{
		if($this->check_existing_session()==false)
		{
			redirect(base_url());
		}
	}
	public function check_if_a_previous_session_exists()
	{
		if($this->check_existing_session()==true)
		{
			$this->redirect_to_admin_page();
		}
	}
	public function redirect_to_admin_page()
	{
		$this->$CI.redirect(base_url().'admin/');
	}
	public function get_session_id()
	{
		return $this->CI->session->
					userdata(
						$this->get_session_id_name_text()
					);
	}

	public function set_session_id($id)
	{
		$this->session->set_userdata($this->get_session_id(), $id);
	}

	
	public function is_valid($input)
	{
		return (isset($input) && !empty($input));
	}

	public function get_session_id_name_text()
	{
		return 'sessId';
	}

}