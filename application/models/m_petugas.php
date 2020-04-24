<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_petugas extends CI_Model{

	public function get_petugas($table_name){

		$get_petugas = $this->db->get($table_name);
		return $get_petugas->result_array();
	}

	public function tambahData($table_name, $data){

		$tambah = $this->db->insert($table_name, $data);
		return $tambah;
	}

	public function editData($table_name, $data, $id_petugas){

		$this->db->where('id_petugas', $id_petugas);
		$edit = $this->db->update($table_name, $data);
		return $edit;
	}

	public function dataEdit($table_name, $id_petugas){

		$this->db->where('id_petugas', $id_petugas);
		$get_petugas = $this->db->get($table_name);
		return $get_petugas->row();
	}

	public function hapusData($table_name, $id_petugas){

		$this->db->where('id_petugas', $id_petugas);
		$drop = $this->db->delete($table_name);
		return $drop;
	}
}