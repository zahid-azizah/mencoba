<?php 

/**
* 
*/
class Home extends CI_Controller
{

	public function __construct(){
		parent::__construct();
		$this->load->model('Tampilan');
		$this->load->model('Analisa_model');
		$this->load->model('Line_model');
		$this->load->model('Masin_model');
		$this->load->model('Shift_model');
		$this->load->library('form_validation');
		
	}
	
	public function index($nama= '')
	{
		$data['judul']= 'Halaman Home';
		$data['nama']= $nama;
		

		$data['line'] = $this->Tampilan->getAllAnalisa();
		if ( $this->input->post('keyword') ) {
			$data['tb_view'] = $this->Tampilan->caridata();
		}
		$this->load->view('templates/header', $data);
		$this->load->view('home/index');
		$this->load->view('templates/footer');
	}

	public function tambah(){

		$data['judul']= 'form tambah data qc';
		$data['analisas']= $this->Analisa_model->getAllAnalisa();
		$data['lines']= $this->Line_model->getAllLine();
		$data['masins']= $this->Masin_model->getAllMesin();
		$data['shifts']= $this->Shift_model->getAllShift();
		$data['tampilans']= $this->Tampilan->getAllAnalisa();


		$this->form_validation->set_rules('tempratur', 'Tempratur', 'required');
		if ($this->form_validation->run() == FALSE) {

			$this->load->view('templates/header', $data);
			$this->load->view('home/tampilan');
			$this->load->view('templates/footer');	
		} else {
			$this->Tampilan->tambahData($_POST);
			redirect('home/index');
		}
	}
	public function hapus(){
		$id = $this->input->get('id');
		$this->db->delete('tb_view', array('id_view' => $id));
		redirect('home/index'); 
	}
	public function edit(){

		$data['judul']= 'form tambah data qc';
		$data['analisas']= $this->Analisa_model->getAllAnalisa();
		$data['lines']= $this->Line_model->getAllLine();
		$data['masins']= $this->Masin_model->getAllMesin();
		$data['shifts']= $this->Shift_model->getAllShift();
		$data['tampilans']= $this->Tampilan->getAllAnalisa();


		$this->form_validation->set_rules('tempratur', 'Tempratur', 'required');
		if ($this->form_validation->run() == FALSE) {
			$id =  $this->input->get('id');
			$data['tampil'] = $this->Tampilan->getAllAnalisa($id);


			$this->load->view('templates/header', $data);
			$this->load->view('home/edit');
			$this->load->view('templates/footer');	
		} else {
			$this->Tampilan->edit($_POST);
			redirect('home/index');


		}
	}


	}


		?>