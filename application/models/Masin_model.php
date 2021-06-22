<?php 

class Masin_model extends CI_model
{
	
	public function getAllMesin()
	{
		return $query = $this->db->get('tb_machine')->result_array();

	}
	public function tambahDataMesin(){
		$data = [
				
				"machine_name"		=> $this->input->post('machine_name', true),

		];

		$this->db->insert('tb_machine', $data);
		
	}
}
 ?>