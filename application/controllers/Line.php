<?php 
/**
* 
*/
class Line extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('Line_model');
		$this->load->library('form_validation');
		
	}
	
	public function index()
	{
		
		$data['judul'] = 'Daftar QC';
		$data['line'] = $this->Line_model->getAllLine();
		$this->load->view('templates/header', $data);
		$this->load->view('line/index');
		$this->load->view('templates/footer');
	}


	public function tline(){

		$data['judul']= 'form tambah data qc';
		$this->form_validation->set_rules('lane_name', 'Line', 'required');
		if ($this->form_validation->run() == FALSE) {

			$this->load->view('templates/header', $data);
			$this->load->view('line/tline');
			$this->load->view('templates/footer');	
		} else {
			$this->Line_model->tambahDataLine($_POST);
			redirect('line/index');
		}

	}
}

?>