<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		
		$this->load->helper('url_helper');
	}
	public function index(){

		
		$this->load->view('templates/header');
		$this->load->view('pages/index');
		$this->load->view('templates/footer');
	}

	public function single($id = NULL){

			
	}

	public function tambah(){
		
	}

	public function ubah($id){

	}

	public function hapus($id){
		
	}
}
