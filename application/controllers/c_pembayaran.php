<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_pembayaran extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('m_pembayaran');
	}

	public function dataPembayaranSpp(){
		
		$nis = $this->input->post('nis', true);
		$nama = $this->input->post('nama', true);
		$kelas = $this->input->post('kelas', true);
		$tahun_bayar = $this->input->post('tahun_bayar', true);
		$tgl_bayar = $this->input->post('tgl_bayar', true);

		$dataCari = ['siswa.nis' => $nis,
					 'siswa.nama' => $nama,
					 'siswa.id_kelas' => $kelas,
					 'pembayaran.tahun_bayar' => $tahun_bayar,
					 'pembayaran.tgl_bayar' => $tgl_bayar];

		$data['ket2'] = ['nis' => $nis,
						 'nama' => $nama,
						 'id_kelas' => $kelas,
						 'tahun_bayar' => $tahun_bayar,
						 'tgl_bayar' => $tgl_bayar];

		$data['dataKelas'] = $this->db->get('kelas')->result_array();
		$data['data'] = $this->m_pembayaran->dataPembayaranSpp($dataCari);
		$this->load->view('admin/pembayaran/v_dataPembayaran', $data);
	}

	public function cariDataSiswa(){
		
		$this->load->view('admin/pembayaran/v_search');
	}

	public function prosesCariData(){
		
		$nis = $this->input->post('nis', true);
		$data['dataSiswa'] = $this->m_pembayaran->cariDataSiswa($nis);
		$cek  = count($data);
		if ($cek > 0) {
			$this->load->view('admin/pembayaran/v_dataSearch', $data);
		}else{
			echo 'NIS yang anda cari tidak ditemukan!';
		}
	}

	public function pembayaranSPP($nisn){

		$bulan = $this->input->post('bulan', true);
		$tahun  = $this->input->post('tahun', true);
		$id_spp = $this->input->post('id_spp', true);
		$status_siswa = $this->input->post('status_siswa', true);

		$id_petugas = $this->session->userdata('id_petugas');

		//jumlah bayar & status
		if (empty($status_siswa)) {
			$status_siswa = ' ';
			if ($id_spp == '1' || $id_spp == '4') {
				$id_spp2 = '1';
				$spp = $this->db->get_where('spp', ['id_spp' => $id_spp2])->row();
				$totalSpp = $spp->nominal;
				$sppPerbulan = $totalSpp/12;
				$jumlahBayar = $bulan*$sppPerbulan;
			}elseif ($id_spp == '2') {
				$spp = $this->db->get_where('spp', ['id_spp' => $id_spp])->row();
				$totalSpp = $spp->nominal;
				$sppPerbulan = $totalSpp/12;
				$jumlahBayar = $bulan*$sppPerbulan;
			}else {
				$spp = $this->db->get_where('spp', ['id_spp' => $id_spp]);
				$totalSpp = $spp->nominal;
				$sppPerbulan = $totalSpp/12;
				$jumlahBayar = $bulan*$sppPerbulan;
			}
		}else {
				$jumlahBayar = 0;
		}

			//hitung bulan bayar
			$ambil = $this->db->get_where('pembayaran', ['nisn' => $nisn])->result_array();
			foreach ($ambil as $a) {
				$hitung2 = $a['bulan_bayar'];
			}
			$cek = $hitung2+$bulan;

			//insert pembayaran
			if ($cek > 36) {
				if ($hitung2 >= 36) {
					$this->load->view('admin/pembayaran/v_pembayaranSelesai');
			}else {
				$bulan2 = 36-$hitung2;

				$data = ['id_petugas' 	=> $id_petugas,
						 'nisn'			=> $nisn,
						 'tgl_bayar'	=> date('Y-m-d'),
						 'bulan_bayar'	=> $bulan2,
						 'tahun_bayar'	=> '3',
						 'id_spp'		=> '3',
						 'jumlah_bayar'	=> $jumlahBayar,
						 'status_siswa'	=> $status_siswa];

				$tambah = $this->db->insert('pembayaran', $data);

				if ($tambah) {
					$this->load->view('admin/pembayaran/v_dataSearch');
				}else {
					echo 'gagal insert';
				}
			}
		}else {
			if ($cek <13) {
				if (empty($hitung2)) {
					$data = ['id_petugas' 	=> $id_petugas,
							 'nisn'			=> $nisn,
						 	'tgl_bayar'		=> date('Y-m-d'),
						 	'bulan_bayar'	=> $bulan,
						 	'tahun_bayar'	=> '1',
						 	'id_spp'		=> '1',
						 	'jumlah_bayar'	=> $jumlahBayar,
						 	'status_siswa'	=> $status_siswa];

					$tambah = $this->db->insert('pembayaran', $data);
					$dataUpdate = ['id_spp' => '1'];
					$updateTahunbayar = $this->m_pembayaran->updateIdSpp($nisn, $dataUpdate);
				}else{
					$data = ['id_petugas' 	=> $id_petugas,
						 	'nisn'			=> $nisn,
							 'tgl_bayar'	=> date('Y-m-d'),
							 'bulan_bayar'	=> $bulan,
							 'tahun_bayar'	=> '1',
							 'id_spp'		=> '1',
							 'jumlah_bayar'	=> $jumlahBayar,
							 'status_siswa'	=> $status_siswa];
					$tambah = $this->db->insert('pembayaran', $data);
				}
			}elseif ($cek >12 && $cek <25) {
				$data = ['id_petugas' 	=> $id_petugas,
						 'nisn'			=> $nisn,
						 'tgl_bayar'	=> date('Y-m-d'),
						 'bulan_bayar'	=> $bulan,
						 'tahun_bayar'	=> '2',
						 'id_spp'		=> '2',
						 'jumlah_bayar'	=> $jumlahBayar,
						 'status_siswa'	=> $status_siswa];
				$dataUpdate = ['id_spp' => '2'];
				$updateTahunbayar = $this->m_pembayaran->updateIdSpp($nisn, $dataUpdate);
				if (!$updateTahunbayar) {
					echo 'Gagal Update Data Siswa';;
				}
				$tambah = $this->db->insert('pembayaran', $data);
			}elseif ($cek >24 && $cek <37) {
				$data = ['id_petugas' 	=> $id_petugas,
						 'nisn'			=> $nisn,
						 'tgl_bayar'	=> date('Y-m-d'),
						 'bulan_bayar'	=> $bulan,
						 'tahun_bayar'	=> '3',
						 'id_spp'		=> '3',
						 'jumlah_bayar'	=> $jumlahBayar,
						 'status_siswa'	=> $status_siswa];

				$dataUpdate = ['id_spp' => '3'];
				$updateTahunbayar = $this->m_pembayaran->updateIdSpp($nisn, $dataUpdate);
				if (!$updateTahunbayar) {
					echo 'Gagal Update Data Siswa';
				}
				$tambah = $this->db->insert('pembayaran', $data);
			}

			if ($tambah) {
				redirect('c_pembayaran/dataPembayaranSpp');
			}else{
				echo 'Gagal Insert Data';
			}
		}

	}

	public function SppSelesai(){
		
		$this->load->view('admin/pembayaran/v_pembayaranSelesai');
	}

	public function ubahNominalSpp(){
		
		$data['data'] = $this->db->get('spp')->result_array();
		$this->load->view('admin/pembayaran/v_ubahNominalSpp', $data);
	}

	public function prosesUbahNominalSpp(){
		
		$tahun = $this->input->post('tahun', true);
		$nominal = $this->input->post('nominal', true);
		$hasilNominal = $nominal*12;
		$dataTahun = ['tahun' => $tahun];
		$dataNominal = ['nominal' => $hasilNominal];
		$update = $this->m_pembayaran->prosesUbahNominalSpp($dataNominal, $dataTahun);

		// if ($update) {
		// 	redirect('','refresh')	
		// }
	}
} 