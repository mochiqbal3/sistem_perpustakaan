<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layout extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('html');
	}
	public function index(){		
		$data['judul'] = "Halaman depan";
		$this->load->view('view_header',$data);
		$this->load->view('view_index',$data);
		$this->load->view('view_footer',$data);
	}
	public function about(){		
		$data['judul'] = "Halaman about";
		$this->load->view('view_header',$data);
		$this->load->view('view_about',$data);
		$this->load->view('view_footer',$data);
	}
}