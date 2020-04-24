<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_spp extends CI_Controller{
	
	function __construct(){
		parent::__construct();

		if ($this->session->userdata('status') != "login") {
			redirect(site_url("Login"));
		}
	}

	public function index(){

		$this->load->view('admin/spp/v_spp');
		$this->data['spp'] = $this->m_spp->get_spp('spp');
		$this->load->view('c_spp', $this->data);
	}

	public function form_input(){

		$this->load->view('admin/spp/v_inputs');
	}

	public function insert(){

		$tahun = $_POST['tahun'];
		$nominal = $_POST['nominal'];
		$data = ['tahun' => $tahun, 'nominal' => $nominal];
		$tambah = $this->m_spp->tambahData('spp', $data, $id_spp);
		if ($tambah > 0) {
			redirect('welcome/spp');
		}else{
			echo 'GAGAl di inputkan!';
		}
		$this->db->insert('spp', $data);
		redirect('welcome/spp');
	}

	public function form_edit($id_spp){

		$this->data['dataEdit'] = $this->m_spp->dataEdit('spp', $id_spp);
		$this->load->view('admin/spp/v_edits', $this->data);
	}

	public function update($id_spp){

		$tahun = $_POST['tahun'];
		$nominal = $_POST['nominal'];
		$data = ['tahun' => $tahun, 'nominal' => $nominal];
		$edit = $this->m_spp->editData('spp', $data, $id_spp);
		if ($edit > 0) {
			redirect('welcome/spp');
		}else{
			echo 'Gagal Update';
		}
	}

	public function drop($id_spp){

		$drop = $this->m_spp->hapusData('spp', $id_spp);
		if ($drop > 0) {
			redirect('welcome/spp');
		}else{
			echo 'Gagal Dihapus';
		}
	}
}