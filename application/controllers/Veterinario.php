<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Veterinaria extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}
	public function index(){
		$this->load->view('templateVeterinario/header');
		$this->load->view('veterinario/menuVeterinario');
		$this->load->view('templateVeterinario/footer');
    }
}
