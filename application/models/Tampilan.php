<?php 

class Tampilan extends CI_model
{
	
	public function getAllAnalisa()
	{
		$query = "SELECT * 
FROM tb_view
INNER JOIN tb_shift ON tb_view.shift = tb_shift.id_shift
INNER JOIN tb_line ON tb_view.line = tb_line.id_line
INNER JOIN tb_machine ON tb_view.machine_no = tb_shift.id_shift";



		return $query = $this->db->query($query)->result_array();

	}
	
}
 ?>