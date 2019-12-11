<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {

    /*Para realizar nuevas funciones porfavor utilizar esto para asi mantener los metodos del sistema ocultos
        *Esto hace referencia a que si no se encuentra logeado como tipo usuario no podra utilizar estos metodos
    public function nombreFuncion(){    
        if($this->session->userdata("usuario")){
            aca va lo que quiera hacer
        }else{
            redirect('index');
        }
    */

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
