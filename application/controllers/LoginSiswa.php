<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class LoginSiswa extends CI_Controller{

	public function index(){
		
		$this->load->view('admin/LoginSiswa');
	}

	public function prosesLogin(){

		if (isset($_POST['login'])) {

				$nis = $this->input->post('nis', true);
				$password = $this->input->post('password', true);
				$cek = $this->MLogin->prosesLogin($nis, $password);
				$hasil = count(array($cek));
				if ($hasil > 0) {

					$data_session = ['nisn' => $cek->nisn,
									'nis' => $cek->nis,
									'nama' => $cek->nama];

				$this->session->set_userdata($data_session);

				$this->load->view('siswa/dashboard');
				}else{
					redirect('LoginSiswa');
				}
			}	
	}

	public function homeSiswa(){
		
		if (empty($this->session->userdata('nis'))) {
			redirect('LoginSiswa');
		}else{
			$nisn = $this->session->userdata('nisn');

			$data['pembayaran'] = $this->m_siswa->home($nisn);

			for ($i=1; $i < 13; $i++){

				$data['spp_tahun1'][] = $this->m_siswa->dataPembayaranSpp($nisn, $bulan = $i, $tahun = 1);
				$data['spp_tahun2'][] = $this->m_siswa->dataPembayaranSpp($nisn, $bulan = $i, $tahun = 2);
				$data['spp_tahun3'][] = $this->m_siswa->dataPembayaranSpp($nisn, $bulan = $i, $tahun = 3);
			}
			$this->load->view('siswa/homeSiswa', $data);
		}
	}

	public function profile(){
		
		$nis = $this->session->userdata('nis');
		if (empty($nis)) {
			redirect('LoginSiswa');
		}else{
			$data['profile'] = $this->MLogin->Profile($nis);
			$this->load->view('siswa/Profile', $data);
		}
	}

	public function home(){
		
		$this->load->view('siswa/dashboard');
	}

	public function tentangSpp(){
		
		$this->load->view('siswa/TentangSpp');
	}


	public function logout(){
        $this->session->sess_destroy();
        redirect('LoginSiswa');
    }
}