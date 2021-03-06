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
		if(empty($this->session->userdata('tanggal')))
		{
			$this->session->set_userdata('tanggal', date('Y-m-dTH:i'));
			$this->session->set_userdata('detik', date('s'));
		}

		$this->load->view('user_penjualan');
	}

	public function rekap_penjualan()
	{
		// $data=array('tanggal' => $this->input->get('tanggal'));
		// $this->session->set_userdata('tanggal', $data['tanggal']);

		$this->load->view('rekap_penjualan');
	}

	//INPUT DATA KE DATABASE
	public function masuk_data()
	{
		$tanggal = $this->input->post('tanggal');
		$detik = $this->input->post('detik');
		$barang = $this->input->post('barang');
		$kuantitas = $this->input->post('kuantitas');
		$harga_barang = $this->input->post('harga_barang');

		// echo $tanggal . ':' . $detik;
		// exit();

		$data = array(
			'tanggal' => $tanggal . ':' . $detik,//isi ini harus lengkap mulai dari tahun-bulan-tanggal jam:menit:detik
			'barang' => $barang,
			'kuantitas' => $kuantitas,
			'harga_barang' => $harga_barang,
		);

		//FLASH (memberitahu user input data berhasil)
		$this->session->set_flashdata('pesan_input_data_berhasil', 'Input Data Berhasil');

		$this->session->set_userdata('tanggal', $data['tanggal']);
		
		$this->Penjualan_model->input_data($data,'penjualan');
		redirect('Penjualan/index');



	}

	public function tabel_rekap_penjualan()
	{
		$data=array('tanggal' => $this->input->get('tanggal'));

		$this->session->set_userdata('tanggal', $data['tanggal']);

	
		$this->load->view('tabel_rekap_penjualan', $data);

	}

	public function TABEL_PENJUALAN()
	{
		$data['tanggal']=date_format(date_create($this->input->get('tanggal')),"Y-m-d");
		$data['tanggal_akhir'] = date_format(date_create($this->input->get('tanggal_akhir')),"Y-m-d");
		$data['tanggal_satuan'] = date_format(date_create($this->input->get('tanggal_satuan')),"Y-m-d");

		//PROSES AMBIL DATA
		$data['title'] = "barang";
		$this->load->model('Penjualan_model');
		if($data['tanggal']==$data['tanggal_akhir'])
		{
			//utk merubah value ke if
			$data['tanggal']='0000-00-00';
		}
		//menentukan opsi satuan atau rentang
		if($data['tanggal']=="0000-00-00"){
			$where=array('date(tanggal)'=>$data['tanggal_satuan']);
			$data['barang'] = $this->Penjualan_model->M_TABEL($where);	
		}else{
			$where=array('date(tanggal)>='=> $data['tanggal'],'date(tanggal) <= '=> $data['tanggal_akhir']);
			$data['barang'] = $this->Penjualan_model->M_TABEL($where);
		}

		// //modifikasi ines
		// $data['barang'] = $this->Penjualan_model->tanggal_satuan($data['tanggal_satuan']);

		$data['sum_jumlah'] = $this->Penjualan_model->get_sum();

		$this->load->view('TABEL_PENJUALAN',$data);
		
		 
	}

}
