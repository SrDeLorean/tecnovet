<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrador extends CI_Controller {

    /*Para realizar nuevas funciones porfavor utilizar esto para asi mantener los metodos del sistema ocultos
        *Esto hace referencia a que si no se encuentra logeado como tipo administrador no podra utilizar estos metodos
    public function nombreFuncion(){    
        if($this->session->userdata("administrador")){
            aca va lo que quiera hacer      
        }else{
            redirect('index');
        }
    */

	public function __construct(){
		parent::__construct();
    }
    
    public function index(){
        if($this->session->userdata("administrador")){
            $this->load->view('templateAdmin/header');
            $this->load->view('administrador/menuAdministrador');
            $this->load->view('templateAdmin/footer');
        }else{
            redirect('index');
        }
    }

    public function usuarios(){
        if($this->session->userdata("administrador")){
            $this->load->view('templateAdmin/header');
            $this->load->view('administrador/usuarios');
            $this->load->view('templateAdmin/footer');
        }else{
            redirect('index');
        }
    }
        
    public function duenos(){
        if($this->session->userdata("administrador")){
            $this->load->view('templateAdmin/header');
            $this->load->view('administrador/duenos');
            $this->load->view('templateAdmin/footer');
        }else{
            redirect('index');
        }
	}

	// Carga de archivos para el menu ADMINISTRADOR
    public function perfiles(){
        if($this->session->userdata("administrador")){
            $this->load->view('templateAdmin/header');
            $this->load->view('administrador/perfiles');
            $this->load->view('templateAdmin/footer');
        }else{
            redirect('index');
        }
    }
}
