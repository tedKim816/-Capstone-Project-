<?php

class Education_model extends CI_model 
{
	public function get_education()
	{

		$query = $this->db->query("SELECT * FROM education");

		foreach ($query->result() as $row)
		{
		        echo "course: " . $row->coursename . "<br>";
		        echo "your progress: " . $row->progress . "<br>";
		        echo "your test scores: " . $row->test . "<br>";
		        echo "your questions: " . $row->question . "<br>" . "<br>";
		}
	}
}

?>