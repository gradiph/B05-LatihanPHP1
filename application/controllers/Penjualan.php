<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjualan extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('home');
	}


	public function penjualan_halaman_dua()
	{
		$this->load->view('user_penjualan');
	}

	public function rekap_penjualan()
	{
		$this->load->view('rekap_penjualan');
	}

	//INPUT DATA KE DATABASE
	public function masuk_data()
	{
		$tanggal = $this->input->post('tanggal');
		$barang = $this->input->post('barang');
		$kuantitas = $this->input->post('kuantitas');
		$harga_barang = $this->input->post('harga_barang');

		$data = array(
			'tanggal' => $tanggal,
			'barang' => $barang,
			'kuantitas' => $kuantitas,
			'harga_barang' => $harga_barang
		);

		$this->session->set_userdata('tanggal', $data['tanggal']);
		
		$this->Penjualan_model->input_data($data,'penjualan');
		redirect('Penjualan/index');



	}

	public function tabel_rekap_penjualan()
	{
		$data=array('tanggal' => $this->input->get('tanggal'));
		
		$this->load->view('tabel_rekap_penjualan', $data);

	}

}
