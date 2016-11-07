<?php 
class crud_peminjam extends CI_Controller{
	function __construct(){
		parent::__construct();		
		$this->load->model('model_peminjam');
		$this->load->helper('url');
	}
	function index(){
		$data['peminjam'] = $this->model_peminjam->ambil_data()->result();
		$this->load->view('layout/view_header');
		$this->load->view('peminjam/view_tampil',$data);
	}
	function tambah(){
		$this->load->view('layout/view_header');
		$this->load->view('peminjam/view_input');
	}
	function tambah_aksi(){
		$kode = $this->input->post('kode');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');
		$data = array(
			'peminjam_kode' => $kode,
			'peminjam_nama' => $nama,
			'peminjam_alamat' => $alamat,
			'peminjam_telp' => $no_hp,
			);
		$this->model_peminjam->input_data($data,'peminjam');
		redirect('crud_peminjam/index');
	}
	function hapus($peminjam_kode){
		$where = array('peminjam_kode' => $peminjam_kode);
		$this->model_peminjam->hapus_data($where,'peminjam');
		redirect('crud_peminjam/index');
	}
	function edit($peminjam_kode){
		$where = array('peminjam_kode' => $peminjam_kode);
		$data['peminjam'] = $this->model_peminjam->edit_data($where,'peminjam')->result();
		$this->load->view('layout/view_header');
		$this->load->view('peminjam/view_edit',$data);
	}
	function update(){
		$peminjam_kode = $this->input->post('peminjam_kode');
		$peminjam_nama = $this->input->post('peminjam_nama');
		$peminjam_alamat = $this->input->post('peminjam_alamat');
		$peminjam_telp = $this->input->post('peminjam_telp');
		$data = array(
			'peminjam_nama' => $peminjam_nama,
			'peminjam_alamat' => $peminjam_alamat,
			'peminjam_telp' => $peminjam_telp,
		);

		$where = array(
			'peminjam_kode' => $peminjam_kode
		);

		$this->model_peminjam->update_data($where,$data,'peminjam');
		redirect('crud_peminjam/index');
	}
}