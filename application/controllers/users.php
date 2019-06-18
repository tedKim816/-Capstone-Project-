<?php

class Users extends CI_Controller 
{

	public function show()
	{
		// manual method, can be done in config autoload.php
		//$this->load->model('user_model');

		//$data['welcome'] = "Welcome to my page";

		$data['results'] = $this->user_model->get_users();

		$this->load->view('user_view', $data);

		// should be handled in controller
		//foreach ($data as $object) 
		//{
		//	echo $object->id . "<br>";
		//	echo $object->username . "<br>";
		//}

	}

}

?>