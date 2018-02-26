<?php
defined('BASEPATH') or exit('No direct script allowed');

class Users_model extends CI_Model{

    /*
    Add team data to database. Table name is teams
    @param $full_name
    @param $email
    @param $team_name
    @param $password
    */
    public function register_team($full_name, $email, $team_name, $password){
        $this->db->trans_start();
        $data=array(
			'full_name' => 
				$full_name,
			'email' => 
				$email,
			'team_name'=> 
				$team_name,
			'password' => 
				$password
        );
        $this->db->insert('teams',$data);
        $this->db->trans_complete();
        if($this->db->trans_status() == FALSE)
		{
            return array('error'=>'Sorry there was a problem registering your team.');
		}
		else
		{
			return array('success'=>'The team has been registered successfully.');
		}
    }

}