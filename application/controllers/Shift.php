<?php 
/**
* 
*/
class Shift extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('Shift_model');
		$this->load->library('form_validation');
		
	}
	
	public function index()
	{
		
		$data['judul'] = 'Daftar QC';
		$data['shift'] = $this->Shift_model->getAllShift();
		$this->load->view('templates/header', $data);
		$this->load->view('shif/index');
		$this->load->view('templates/footer');
	}


	public function tshift(){

		$data['judul']= 'form tambah data qc';
		$this->form_validation->set_rules('shift_time1', 'Shif', 'required');

		$this->form_validation->set_rules('shift_time2', 'Shif', 'required');
		if ($this->form_validation->run() == FALSE) {

			$this->load->view('templates/header', $data);
			$this->load->view('shif/tshif');
			$this->load->view('templates/footer');	
		} else {
			$this->Shift_model->tambahDataShift($_POST);
			redirect('shift/index');
		}

	}
}

?>