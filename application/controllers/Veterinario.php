<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Veterinario extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		if($this->session->userdata("veterinario")){
			$this->load->view('templateVeterinario/header');
			$this->load->view('veterinario/menuVeterinario');
			$this->load->view('templateVeterinario/footer');
		}else{
            redirect('index');
        }
	}
	
}
