<?php

class Home extends CI_Controller 
{
	// calling the home_view.php file
	public function index()
	{
		//echo "this is the home controller";	
		$this->load->view('home_view');
	}
}

?>