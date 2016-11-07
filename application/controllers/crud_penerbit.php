<?php 
class crud_penerbit extends CI_Controller{
	function __construct(){
		parent::__construct();		
		$this->load->model('model_penerbit');
		$this->load->helper('url');
	}
	function index(){
		$data['penerbit'] = $this->model_penerbit->ambil_data()->result();
		$this->load->view('layout/view_header');
		$this->load->view('penerbit/view_tampil',$data);
	}
	function tambah(){
		$this->load->view('layout/view_header');
		$this->load->view('penerbit/view_input');
	}
	function tambah_aksi(){
		$kode = $this->input->post('kode');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');
		$data = array(
			'penerbit_kode' => $kode,
			'penerbit_nama' => $nama,
			'penerbit_alamat' => $alamat,
			'penerbit_telp' => $no_hp,
			);
		$this->model_penerbit->input_data($data,'penerbit');
		redirect('crud_penerbit/index');
	}
	function hapus($penerbit_kode){
		$where = array('penerbit_kode' => $penerbit_kode);
		$this->model_penerbit->hapus_data($where,'penerbit');
		redirect('crud_penerbit/index');
	}
	function edit($penerbit_kode){
		$where = array('penerbit_kode' => $penerbit_kode);
		$data['penerbit'] = $this->model_penerbit->edit_data($where,'penerbit')->result();
		$this->load->view('layout/view_header');
		$this->load->view('penerbit/view_edit',$data);
	}
	function update(){
		$penerbit_kode = $this->input->post('penerbit_kode');
		$penerbit_nama = $this->input->post('penerbit_nama');
		$penerbit_alamat = $this->input->post('penerbit_alamat');
		$penerbit_telp = $this->input->post('penerbit_telp');
		$data = array(
			'penerbit_nama' => $penerbit_nama,
			'penerbit_alamat' => $penerbit_alamat,
			'penerbit_telp' => $penerbit_telp,
		);

		$where = array(
			'penerbit_kode' => $penerbit_kode
		);

		$this->model_penerbit->update_data($where,$data,'penerbit');
		redirect('crud_penerbit/index');
	}
}