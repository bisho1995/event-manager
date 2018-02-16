<?php defined("BASEPATH") or exit("No direct script access allowed");




class Functions
{
	private $CI;

	public function __construct()
	{
		$this->CI=& get_instance();
	}

	public function check_existing_session()
	{
		$sessionId=$this->get_session_id();
		$sessionEmail=$this->get_session_email();
		if($this->is_valid($sessionId) && $this->is_valid($sessionEmail))
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
	public function get_session_email()
	{
		return $this->CI->
				session->
					userdata(
						$this->get_session_email_text()
					);
	}
	public function is_valid($input)
	{
		return (isset($input) && !empty($input));
	}

	public function get_session_id_name_text()
	{
		return 'sessId';
	}

	public function get_session_email_text()
	{
		return 'email';
	}

}