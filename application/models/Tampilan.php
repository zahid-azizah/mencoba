<?php 

class Tampilan extends CI_model
{
	
	public function getAllAnalisa($id = null)
	{
		$query = "SELECT * 
		FROM tb_view
		INNER JOIN tb_shift ON tb_view.shift = tb_shift.id_shift
		INNER JOIN tb_line ON tb_view.line = tb_line.id_line
		INNER JOIN tb_machine ON tb_view.machine_no = tb_machine.id_machine
		INNER JOIN tb_analisa ON tb_view.analisis = tb_analisa.id_analisa"
		;
		return $query = $this->db->query($query)->result_array();
		if ($id != null) {
			$query = "SELECT * 
			FROM tb_view
			INNER JOIN tb_shift ON tb_view.shift = tb_shift.id_shift
			INNER JOIN tb_line ON tb_view.line = tb_line.id_line
			INNER JOIN tb_machine ON tb_view.machine_no = tb_machine.id_machine
			INNER JOIN tb_analisa ON tb_view.analisis = tb_analisa.id_analisa WHERE tb_view.id_view = $id"
			;

			return $this->db->query($query)->row_array();
		}


	}

	public function tambahData(){
		$analis = [
			"viscosity"		=> $this->input->post('viscosity', true),
			"naoh" 			=> $this->input->post('naoh', true),
			"a-cellulose" 	=> $this->input->post('a-cellulose', true),
			"tempratur" 	=> $this->input->post('tempratur', true),
			"kw" 			=> $this->input->post('kw', true)

		];

		$this->db->insert('tb_analisa', $analis);

// cari last data
		$query = "SELECT * FROM tb_analisa ORDER BY id_analisa DESC";
		$data = $this->db->query($query)->result_array();


		$view = [
			"id_view"			=> "",
			"date" 				=> date("Y-m-d"),
			"shift" 			=> $this->input->post('shift', true),
			"sampling_time" 	=> date("h : i"),
			"line" 				=> $this->input->post('line', true),
			"machine_no" 		=> $this->input->post('machine', true),
			"analisis" 			=> $data[0]['id_analisa']
		];
		$this->db->insert('tb_view', $view);
	}

	public function edit(){

		$analis = [
			"id_analisa" => $this->input->post('idanalisa', true),
			"viscosity"		=> $this->input->post('viscosity', true),
			"naoh" 			=> $this->input->post('naoh', true),
			"a-cellulose" 	=> $this->input->post('a-cellulose', true),
			"tempratur" 	=> $this->input->post('tempratur', true),
			"kw" 			=> $this->input->post('kw', true)

		];

		$this->db->Update('tb_analisa', $analis, ['id_analisa' => $this->input->post('idanalisa', true)]);

		$dataview  =$this->db->get_where('tb_view', ['id_view' => $this->input->post('idview', true)])->row_array();
			$view = [
				"id_view"			=> $this->input->post('idview', true),
				"date" 				=> $dataview['date'],
				"shift" 			=> $this->input->post('shift', true),
				"sampling_time" 	=> $dataview['sampling_time'],
				"line" 				=> $this->input->post('line', true),
				"machine_no" 		=> $this->input->post('machine', true),
				"analisis" 			=> $this->input->post('idanalisa', true)
			];
			
			$this->db->Update('tb_view', $view, ['id_view' => $this->input->post('idview', true)]);
		}

		
			public function  caridata(){
				$keyword = $this->input->post('keyword', true);
				$this->db->like('shift', $keyword);
				return $this->db->get_where('tb_view')->result_array();
			}

	}
	?>