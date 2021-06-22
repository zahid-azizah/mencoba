<?php 

class Line_model extends CI_model
{
	
	public function getAllLine()
	{
		return $query = $this->db->get('tb_line')->result_array();

	}
	public function tambahDataLine(){
		$data = [
				
				"lane_name"		=> $this->input->post('lane_name', true),

		];

		$this->db->insert('tb_line', $data);
		
	}
}
 ?>