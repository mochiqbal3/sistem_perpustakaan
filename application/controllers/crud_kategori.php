<?php 
class crud_kategori extends CI_Controller{
	function __construct(){
		parent::__construct();		
		$this->load->model('model_kategori');
		$this->load->helper('url');
	}
	function index(){
		$data['kategori'] = $this->model_kategori->ambil_data()->result();
		$this->load->view('layout/view_header');
		$this->load->view('kategori/view_tampil',$data);
	}
	function tambah(){
		$this->load->view('layout/view_header');
		$this->load->view('kategori/view_input');
	}
	function tambah_aksi(){
		$kode = $this->input->post('kode');
		$nama = $this->input->post('nama');
		$data = array(
			'kategori_kode' => $kode,
			'kategori_nama' => $nama,
			);
		$this->model_kategori->input_data($data,'kategori');
		redirect('crud_kategori/index');
	}
	function hapus($kategori_kode){
		$where = array('kategori_kode' => $kategori_kode);
		$this->model_kategori->hapus_data($where,'kategori');
		redirect('crud_kategori/index');
	}
	function edit($kategori_kode){
		$where = array('kategori_kode' => $kategori_kode);
		$data['kategori'] = $this->model_kategori->edit_data($where,'kategori')->result();
		$this->load->view('layout/view_header');
		$this->load->view('kategori/view_edit',$data);
	}
	function update(){
		$kategori_kode = $this->input->post('kategori_kode');
		$kategori_nama = $this->input->post('kategori_nama');
		$data = array(
			'kategori_nama' => $kategori_nama,
		);

		$where = array(
			'kategori_kode' => $kategori_kode
		);

		$this->model_kategori->update_data($where,$data,'kategori');
		redirect('crud_kategori/index');
	}
}