<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_siswa extends CI_Controller{
	
	function __construct(){
		parent::__construct();

		if ($this->session->userdata('status') != "login") {
			redirect(site_url("Login"));
		}
	}

	public function form_input(){

		$this->load->view('admin/siswa/v_inputs');
	}

	public function insert(){

		$nisn = $_POST['nisn'];
		$nis = $_POST['nis'];
		$nama = $_POST['nama'];
		$id_kelas = $_POST['id_kelas'];
		$alamat = $_POST['alamat'];
		$no_telp = $_POST['no_telp'];
		$pass = $_POST['password'];
		$id_spp = $_POST['id_spp'];
		$data = ['nisn' => $nisn, 'nis' => $nis, 'nama' =>$nama, 'id_kelas' => $id_kelas, 'alamat' => $alamat, 'no_telp' => $no_telp, 'password' => $pass, 'id_spp' => $id_spp];
		$tambah = $this->m_siswa->tambahData('siswa', $data, $nisn);
		if($tambah > 0) {
			redirect('welcome/siswa');
		}else{
			echo 'Gagal Di Inputkan!';
		}
		$this->db->insert('siswa', $data);
		redirect('welcome/siswa');
	}

	public function form_edit($nisn){

		$this->data['dataEdit'] = $this->m_siswa->dataEdit('siswa', $nisn);
		$this->load->view('admin/siswa/v_edits', $this->data);
		
	}

	public function update($nisn){

		$nisn = $_POST['nisn'];
		$nis = $_POST['nis'];
		$nama = $_POST['nama'];
		$id_kelas = $_POST['id_kelas'];
		$alamat = $_POST['alamat'];
		$no_telp = $_POST['no_telp'];
		$pass = $_POST['password'];
		$id_spp = $_POST['id_spp'];
		$data = ['nisn' => $nisn, 'nis' => $nis, 'nama' =>$nama, 'id_kelas' => $id_kelas, 'alamat' => $alamat, 'no_telp' => $no_telp, 'password' => $pass, 'id_spp' => $id_spp];
		$edit = $this->m_siswa->editData('siswa', $data, $nisn);
		if ($edit > 0) {
			redirect('welcome/siswa');
		}else{
			echo 'GAGAL EDIT!';
		}
	}

	public function drop($nisn){

		$drop = $this->m_siswa->hapusData('siswa', $nisn);
		if($drop > 0){
			redirect('welcome/siswa');
		}else{
			echo 'GAGAL HAPUS';
		}
	}

	// public function cariData(){

	// 	$nis = $this->input->post('nis');
		
	// 	$data['siswa'] = $this->m_siswa->search($nis);
	// 	$test = count($data['siswa']);
	// 	if ($test > 0) {
	// 		redirect('c_pembayaran/dataSearch', $data);
	// 	}else{
	// 		echo 'nis yang anda masukkan salah!';
	// 	}
	// }
}