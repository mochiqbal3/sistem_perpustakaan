<?php 
class Crud extends CI_Controller{
	function __construct(){
		parent::__construct();		
		$this->load->model('model_petugas');
		$this->load->helper('url');
	}
	function index(){
		$data['petugas'] = $this->model_petugas->ambil_data()->result();
		$this->load->view('layout/view_header');
		$this->load->view('petugas/view_tampil',$data);
	}
	function tambah(){
		$this->load->view('layout/view_header');
		$this->load->view('petugas/view_input');
	}
	function tambah_aksi(){
		$kode = $this->input->post('kode');
		$nama = $this->input->post('nama');
		$data = array(
			'petugas_kode' => $kode,
			'petugas_nama' => $nama,
			);
		$this->model_petugas->input_data($data,'petugas');
		redirect('crud/index');
	}
	function hapus($petugas_kode){
		$where = array('petugas_kode' => $petugas_kode);
		$this->model_petugas->hapus_data($where,'petugas');
		redirect('crud/index');
	}
	function edit($petugas_kode){
		$where = array('petugas_kode' => $petugas_kode);
		$data['petugas'] = $this->model_petugas->edit_data($where,'petugas')->result();
		$this->load->view('layout/view_header');
		$this->load->view('petugas/view_edit',$data);
	}
	function update(){
		$petugas_kode = $this->input->post('petugas_kode');
		$petugas_nama = $this->input->post('petugas_nama');
		$data = array(
			'petugas_nama' => $petugas_nama,
		);

		$where = array(
			'petugas_kode' => $petugas_kode
		);

		$this->model_petugas->update_data($where,$data,'petugas');
		redirect('crud/index');
	}
}