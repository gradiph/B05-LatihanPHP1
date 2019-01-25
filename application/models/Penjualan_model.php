<?php 
	defined('BASEPATH') OR exit ('No direct script access allowed');

	class Penjualan_model extends CI_Model {

		//memasukan ke database tabel penjualan
		public function input_data($result)
	{
		$this->db->insert('penjualan', $result);
		return TRUE;
	}

	//input database dari halaman user_penjualan
	public function simpan_data()
	{
		$post = $this->input->post();
		$this->tanggal = $post['tanggal'];
		$this->barang = $post['barang'];
		$this->kuantitas = $post['kuantitas'];
		$this->harga_barang = $post['harga_barang'];

		$this->db->insert($this->penjualan, $this);
	}

	}

	





 ?>