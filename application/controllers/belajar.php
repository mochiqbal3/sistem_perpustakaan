<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belajar extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('model_petugas');
		$this->load->helper('html');
	}
	public function index(){
		echo "ini method index pada controller belajar | cara membuat controller pada codeigniter | MalasNgoding.com";
	}

	public function halo(){
		$data['nama'] = "holaa";
		$this->load->view('view_belajar',$data);
	}
	function petugas(){
		$data['petugas'] = $this->model_petugas->ambil_data()->result();
		$this->load->view('view_petugas.php',$data);
	}
}