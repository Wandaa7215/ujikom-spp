<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_kelas extends CI_Controller{	

	function __construct(){
		parent::__construct();

		if ($this->session->userdata('status') != "login") {
			redirect(site_url("Login"));
		}
	}


	public function form_input(){

		$this->load->view('admin/kelas/v_inputk');
	}

	public function insert(){

		$nm_kelas = $_POST['nama_kelas'];
		$jurusan = $_POST['kompetensi_keahlian'];
		$data = ['nama_kelas' => $nm_kelas, 'kompetensi_keahlian' => $jurusan];
		$tambah = $this->m_kelas->tambahData('kelas', $data, $id_kelas);
		if ($tambah > 0) {
			redirect('welcome/kelas');
		}else{
			echo 'GAGAl di inputkan!';
		}
		$this->db->insert('kelas', $data);
		redirect('welcome/kelas');
	}

	public function form_edit($id_kelas){

		$this->data['dataEdit'] = $this->m_kelas->dataEdit('kelas', $id_kelas);
		$this->load->view('admin/kelas/v_editk', $this->data);
	}

	public function update($id_kelas){

		$nm_kelas = $_POST['nama_kelas'];
		$jurusan = $_POST['kompetensi_keahlian'];
		$data = ['nama_kelas' => $nm_kelas, 'kompetensi_keahlian' => $jurusan];
		$edit = $this->m_kelas->editData('kelas', $data, $id_kelas);
		if ($edit > 0) {
			redirect('welcome/kelas');
		}else{
			echo 'Gagal Update';
		}
	}

	public function drop($id_kelas){

		$drop = $this->m_kelas->hapusData('kelas', $id_kelas);
		if ($drop > 0) {
			redirect('welcome/kelas');
		}else{
			echo 'Gagal Dihapus';
		}
	}
}