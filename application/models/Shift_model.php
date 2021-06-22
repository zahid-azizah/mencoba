<?php 

class Shift_model extends CI_model
{
	
	public function getAllShift()
	{
		return $query = $this->db->get('tb_shift')->result_array();

	}
	public function tambahDataShift(){
		$data = [
				"id_shift"			=> '',
				"shift_time"		=> $this->input->post('shift_time1', true),
				"shift_time2"		=> $this->input->post('shift_time2', true)
				

		];
		$this->db->insert('tb_shift', $data);
		
	}
}
 ?>