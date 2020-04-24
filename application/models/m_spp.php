<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_spp extends CI_Model{

	public function get_spp($table_name){

		$get_spp = $this->db->get($table_name);
		return $get_spp->result_array();
	}

	public function tambahData($table_name, $data){

		$tambah = $this->db->insert($table_name, $data);
		return $tambah;
	}

	public function editData($table_name, $data, $id_spp){

		$this->db->where('id_spp', $id_spp);
		$edit = $this->db->update($table_name, $data);
		return $edit;
	}

	public function dataEdit($table_name, $id_spp){

		$this->db->where('id_spp', $id_spp);
		$get_spp = $this->db->get($table_name);
		return $get_spp->row();
	}

	public function hapusData($table_name, $id_spp){

		$this->db->where('id_spp', $id_spp);
		$drop = $this->db->delete($table_name);
		return $drop;
	}
}