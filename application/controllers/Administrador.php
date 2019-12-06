<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrador extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}
	public function index(){
		$this->load->view('templateAdmin/header');
		$this->load->view('administrador/menuAdministrador');
		$this->load->view('templateAdmin/footer');
    }

    public function usuarios() {
     	$this->load->view('templateAdmin/header');
		$this->load->view('administrador/usuarios');
		$this->load->view('templateAdmin/footer');
    }
        
    public function duenos() {
        $this->load->view('templateAdmin/header');
        $this->load->view('administrador/duenos');
        $this->load->view('templateAdmin/footer');
	}

	// Carga de archivos para el menu ADMINISTRADOR

    public function perfiles() {
        $this->load->view('templateAdmin/header');
		$this->load->view('administrador/perfiles');
		$this->load->view('templateAdmin/footer');
    }
}
