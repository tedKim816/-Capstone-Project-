<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// class i.e the controller name 
class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function index()
	{
		
		// loads the page welcome_message.php in views
		// within this class (Welcome)
		$this->load->view('welcome_message'); 
		//echo "this is the welcome controller";
		$this->load->helper('url');
	}

	// will not work with just welcome, needs the index.php to be loaded 
	// firstly i.e /ci/index.php/welcome (/welcome is the controller (class), /test is the method)
	public function test() 
	{
		echo "this is a test method for the view controllers";
	}
}
