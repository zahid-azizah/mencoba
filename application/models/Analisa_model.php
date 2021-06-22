<?php 

class Analisa_model extends CI_model
{
	
	public function getAllAnalisa()
	{
		return $query = $this->db->get('tb_analisa')->result_array();

	}
	public function tambahDataQc(){
		$data = [
				"viscosity"		=> $this->input->post('viscosity', true),
				"naoh" 			=> $this->input->post('naoh', true),
				"a-cellulose" 	=> $this->input->post('a-cellulose', true),
				"tempratur" 	=> $this->input->post('tempratur', true),
				"kw" 			=> $this->input->post('kw', true)

		];
		$this->db->insert('tb_analisa', $data);
		
	}
}
 ?>