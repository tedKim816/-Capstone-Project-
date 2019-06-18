<?php

class User_model extends CI_model 
{
	public function get_users()
	{

		$query = $this->db->query("SELECT * FROM users");

		return $query->num_fields();

		//return $query->num_rows();

		// get users table
		//$query = $this->db->get('users');

		// result returns everything from the table as an
		// array of objects
		//return $query->result();

		// manual method
		//$config['hostname'] = "localhost";
		//$config['username'] = "root";
		//$config['password'] = "";
		//$config['database'] = "capstone_db";

		//$config['hostname'] = "localhost";
		//$config['username'] = "root";
		//$config['password'] = "";
		//$config['database'] = "capstone_db_2";

		//$connection = $this->load->database($config);
		//$connection = $this->load->database($config_2);
	}
}

?>