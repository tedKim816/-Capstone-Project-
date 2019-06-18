<?php

class Education extends CI_Controller 
{

	public function show()
	{
        echo "<h1>Education i.e. Math, English, Etc. will go here</h1>";

        $this->load->helper('url'); 
		$data['results'] = $this->education_model->get_education();
		$this->load->view('education_view', $data);

	}

}

?>