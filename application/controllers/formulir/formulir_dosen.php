<?php 

class Formulir_dosen extends CI_Controller{
	public function __construct(){
		parent:: __construct();

		if($this->session->userdata('role_id')!= '2'){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
					  Anda Belum Login!!
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					  <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
			redirect('auth/login');
		}
	}
	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('formulir/formulir_dosen');
		$this->load->view('templates/footer');
		
	}
}
