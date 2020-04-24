<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_petugas extends CI_Controller{
	
	function __construct(){
		parent::__construct();

		if ($this->session->userdata('status') != "login") {
			redirect(site_url("Login"));
		}
	}

	public function index(){

		$this->load->view('admin/petugas/v_petugas');
		$this->data['user'] = $this->m_petugas->get_user('petugas');
		$this->load->view('c_petugas', $this->data);
	}

	public function profile(){
		
		$this->load->view('petugas/Profile');
	}

	public function form_input(){

		$this->load->view('admin/petugas/v_inputp');
	}

	public function insert(){

		$username = $_POST['username'];
		$password = $_POST['password'];
		$nama_petugas = $_POST['nama_petugas'];
		$level = $_POST['level'];
		$data = ['username' => $username, 'password' => $password, 'nama_petugas' => $nama_petugas, 'level' => $level];
		$tambah = $this->m_petugas->tambahData('petugas', $data, $id_petugas);
		if ($tambah > 0) {
			redirect('welcome/petugas');
		}else{
			echo 'Gagal Di Inputkan!';
		}
		$this->db->insert('petugas', $data);
		redirect('welcome/petugas');
	}

	public function form_edit($id_petugas){

		$this->data['dataEdit'] = $this->m_petugas->dataEdit('petugas', $id_petugas);
		$this->load->view('admin/petugas/v_editp', $this->data);
	}

	public function update($id_petugas){

		$username = $_POST['username'];
		$password = $_POST['password'];
		$nama_petugas = $_POST['nama_petugas'];
		$level = $_POST['level'];
		$data = ['username' => $username, 'password' => $password, 'nama_petugas' => $nama_petugas, 'level' => $level];
		$edit = $this->m_petugas->editData('petugas', $data, $id_petugas);
		if ($edit > 0) {
			redirect('welcome/petugas');
		}else{
			echo 'GAGAL UPDATE!';
		}

	}

	public function drop($id_petugas){

		$drop = $this->m_petugas->hapusData('petugas', $id_petugas, 'id_petugas');
		if ($drop > 0) {
			redirect('welcome/petugas');
		}else{
			echo 'GAGAL DIHAPUS';
		}
	}

	public function logout(){

		$this->session->sess_destroy();
		redirect('welcome/index');
	}
}