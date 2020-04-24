<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_login extends CI_Controller{

	public function index(){
		
		$this->load->view('admin/login');
	}

	public function testLogin(){

		if (isset($_POST['login'])) {
			$username = $this->input->post('username', true);
			$password = $this->input->post('password', true);
			$test = $this->m_login->prosesLogin($username, $password);
			$hasil = count($test);

			if ($hasil > 0) {
				$login = $this->db->get_where('petugas', ['username' => $username, 'password' => $password])->row();
				if ($login->level == 'admin') {
					$data_session = [
						'id_petugas' => $test->id_petugas,
						'username' => $test->username,
						'nama_petugas' => $test->level,
						'status' => "login"];
					$this->session->set_userdata($data_session);
					redirect('welcome/home');
				}else if($login->level == 'petugas') {
					$data_session = [
						'id_petugas' => $test->id_petugas,
						'username' => $test->username,
						'nama_petugas' => $test->level,
						'status' => "login"];
					$this->session->set_userdata($data_session);
					redirect('welcome/homePetugas');
				}else{
					echo 'gagal login';
				}
			}
		}
	}

	public function profile(){
		
		$id_petugas = $this->session->userdata('id_petugas');

		if ($this->session->userdata('nama_petugas') == 'admin') {
			
			$data['profile'] = $this->db->get_where('petugas',array('id_petugas' => $id_petugas))->row();
			$this->load->view('admin/home');
			$this->load->view('petugas/Profile', $data);
		}else if ($this->session->userdata('nama_petugas') == 'petugas') {
			$data['profile'] = $this->db->get_where('petugas',array('id_petugas' => $id_petugas))->row();
			$this->load->view('petugas/home');
			$this->load->view('petugas/Profile', $data);
		}
	}

	public function logout(){

		$this->session->sess_destroy();
		redirect('welcome/index');
	}
}