<?php

class Game extends CI_Controller 
{

	public function show()
	{
		// need this to use css and javascript (base_url)
        $this->load->helper('url'); 
		$this->load->view('game_view');

	}

}

?>