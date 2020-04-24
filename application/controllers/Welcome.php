<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Welcome extends CI_Controller {

	public function index(){

		$this->load->view('dashboard');
	}

	public function home(){

		$this->load->view('admin/home');
		$this->load->view('admin/homeData');
	}

	// public function homeData(){

	// 	$this->load->view('admin/home');
	// 	$this->load->view('admin/homeData');
	// }

	public function homePetugas(){


		$this->load->view('petugas/home');
		$this->load->view('petugas/homePetugas');
	}

	public function siswa()
	{
		$this->data['murid'] = $this->m_siswa->join_table('siswa');
		$this->load->view('admin/home');
		$this->load->view('admin/siswa/v_siswa', $this->data);
	}

	public function petugas(){

		$this->data['user'] = $this->m_petugas->get_petugas('petugas');
		$this->load->view('admin/home');
		$this->load->view('admin/petugas/v_petugas', $this->data);
	}

	public function kelas(){

		$this->data['kelas'] = $this->m_kelas->get_kelas('kelas');
		$this->load->view('admin/home');
		$this->load->view('admin/kelas/v_kelas', $this->data);
	}

	public function spp(){

		$this->data['spp'] = $this->m_spp->get_spp('spp');
		$this->load->view('admin/home');
		$this->load->view('admin/spp/v_spp', $this->data);
	}

	public function pdf(){
		
		$this->load->library('dompdf_gen');

		$data['pembayaran'] = $this->MPembayaran->dataTampil();

		$this->load->view('pembayaran/laporan_pembayaranSpp', $data);

		$paper_size = 'A4';
		$orientation = 'potrait';
		$html = $this->output->get_output();
		$this->dompdf->set_paper($paper_size, $orientation);

		$this->dompdf->load_html($html);
		$this->dompdf->render();
		$this->dompdf->stream("laporan_pembayaranSpp", ['Attachment' =>0]);
	}

}
