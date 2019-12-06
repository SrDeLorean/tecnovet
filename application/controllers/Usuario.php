<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

	public function __construct(){
		parent::__construct();
    }
    
	public function index(){
        if($this->session->userdata("usuario")){
            $this->load->view('templateUsuario/header');
            $this->load->view('usuario/menuUsuario');
            $this->load->view('templateUsuario/footer');
        }else{
            redirect('index');
        }
    }
}
