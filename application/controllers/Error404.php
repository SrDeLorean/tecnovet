<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Error404 extends CI_Controller {

	public function index(){
		$this->load->view('template/header');
		$this->load->view('404');
		$this->load->view('template/footer');
	}
        
}
