<?php 
/**
* 
*/
class Mesin extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('Masin_model');
		$this->load->library('form_validation');
		
	}
	
	public function index()
	{
		
		$data['judul'] = 'Daftar QC';
		$data['mesin'] = $this->Masin_model->getAllMesin();
		$this->load->view('templates/header', $data);
		$this->load->view('mesin/index');
		$this->load->view('templates/footer');
	}


	public function tmesin(){

		$data['judul']= 'form tambah data qc';
		$this->form_validation->set_rules('machine_name', 'Mesin', 'required');
		if ($this->form_validation->run() == FALSE) {

			$this->load->view('templates/header', $data);
			$this->load->view('mesin/tmesin');
			$this->load->view('templates/footer');	
		} else {
			$this->Masin_model->tambahDataMesin($_POST);
			redirect('mesin/index');
		}

	}
}

?>