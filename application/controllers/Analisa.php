<?php 
/**
* 
*/
class Analisa extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('Analisa_model');
		$this->load->library('form_validation');
		
	}
	
	public function index()
	{
		
		$data['judul'] = 'Daftar QC';
		$data['analisa'] = $this->Analisa_model->getAllAnalisa();
		$this->load->view('templates/header', $data);
		$this->load->view('analisa/index');
		$this->load->view('templates/footer');
	}


	public function tambah(){

		$data['judul']= 'form tambah data qc';
		$this->form_validation->set_rules('tempratur', 'Tempratur', 'required');
		if ($this->form_validation->run() == FALSE) {

			$this->load->view('templates/header', $data);
			$this->load->view('analisa/tambah');
			$this->load->view('templates/footer');	
		} else {
			redirect('analisa/index');
		}

	}
}

?>