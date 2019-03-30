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

	public function baru_tabel_rekap_penjualan()
	{
		$this->db->select("tanggal, barang, kuantitas, harga_barang");
		$this->db->where('tanggal', $this->input->get('tanggal'));
		$this->db->order_by("tanggal, barang, kuantitas, harga_barang");

		$panggil_data = $this->db->get('penjualan');
		return $panggil_data->result();
	}

	public function M_TABEL($where)
	{

		 $this->db->select('tanggal, barang, kuantitas, harga_barang, (kuantitas * harga_barang) as total_harga');
		
		// $this->db->where('date(tanggal) >=', $tanggal_satuan);
		$this->db->where($where);
		
		$this->db->order_by('id');
		$data=$this->db->get('penjualan');
		return $data->result();

	}

	public function get_sum()
	{
		$this->db->select_sum('harga_barang','jumlah');
		$this->db->from('penjualan');
		return $this->db->get('')->row();
	}

}

 ?>