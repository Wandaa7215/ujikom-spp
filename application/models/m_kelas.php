<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kelas extends CI_Model{

	public function get_kelas($table_name){

		$get_kelas = $this->db->get($table_name);
		return $get_kelas->result_array();
	}

	public function tambahData($table_name, $data){

		$tambah = $this->db->insert($table_name, $data);
		return $tambah;
	}

	public function editData($table_name, $data, $id_kelas){

		$this->db->where('id_kelas', $id_kelas);
		$edit = $this->db->update($table_name, $data);
		return $edit;
	}

	public function dataEdit($table_name, $id_kelas){

		$this->db->where('id_kelas', $id_kelas);
		$get_kelas = $this->db->get($table_name);
		return $get_kelas->row();
	}

	public function hapusData($table_name, $id_kelas){

		$this->db->where('id_kelas', $id_kelas);
		$drop = $this->db->delete($table_name);
		return $drop;
	}
}