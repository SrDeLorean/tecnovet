<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrador extends CI_Controller {

    /**
     * Rutas de las vistas
     */

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
		$this->load->model('ModuloDeGestionDeUsuario/usuario');
    }
    
    public function index(){
        if($this->session->userdata("administrador")){
            $this->load->view('administrador/templateAdmin/header');
            $this->load->view('administrador/menuAdministrador');
            $this->load->view('administrador/templateAdmin/footer');
        }else{
            redirect('index');
        }
    }

    public function usuario(){
        if($this->session->userdata("administrador")){
            $this->load->view('administrador/templateAdmin/header');
            $this->load->database();
            $data["usuarios"] = $this->usuario->usuarios();
            $this->load->view('administrador/usuario', $data);
            $this->load->view('administrador/templateAdmin/footer');
        }else{
            redirect('index');
        }
    }
        
    public function duenos(){
        if($this->session->userdata("administrador")){
            $this->load->view('administrador/templateAdmin/header');
            $this->load->view('administrador/duenos');
            $this->load->view('administrador/templateAdmin/footer');
        }else{
            redirect('index');
        }
	}

    public function perfiles(){
        if($this->session->userdata("administrador")){
            $this->load->view('administrador/templateAdmin/header');
            $this->load->view('administrador/perfiles');
            $this->load->view('administrador/templateAdmin/footer');
        }else{
            redirect('index');
        }
    }

    public function mascotas(){
        if($this->session->userdata("administrador")){
            $this->load->view('administrador/templateAdmin/header');
            $this->load->view('administrador/mascotas');
            $this->load->view('administrador/templateAdmin/footer');
        }else{
            redirect('index');
        }
    }
    public function estados(){
        if($this->session->userdata("administrador")){
            $this->load->view('administrador/templateAdmin/header');
            $this->load->view('administrador/estados');
            $this->load->view('administrador/templateAdmin/footer');
        }else{
            redirect('index');
        }
    }
    public function caracteres(){
        if($this->session->userdata("administrador")){
            $this->load->view('administrador/templateAdmin/header');
            $this->load->view('administrador/caracteres');
            $this->load->view('administrador/templateAdmin/footer');
        }else{
            redirect('index');
        }
    }
    public function sexos(){
        if($this->session->userdata("administrador")){
            $this->load->view('administrador/templateAdmin/header');
            $this->load->view('administrador/sexos');
            $this->load->view('administrador/templateAdmin/footer');
        }else{
            redirect('index');
        }
    }
    public function especies(){
        if($this->session->userdata("administrador")){
            $this->load->view('administrador/templateAdmin/header');
            $this->load->view('administrador/especies');
            $this->load->view('administrador/templateAdmin/footer');
        }else{
            redirect('index');
        }
    }
    public function razas(){
        if($this->session->userdata("administrador")){
            $this->load->view('administrador/templateAdmin/header');
            $this->load->view('administrador/razas');
            $this->load->view('administrador/templateAdmin/footer');
        }else{
            redirect('index');
        }
    }
    public function fichas(){
        if($this->session->userdata("administrador")){
            $this->load->view('administrador/templateAdmin/header');
            $this->load->view('administrador/fichas');
            $this->load->view('administrador/templateAdmin/footer');
        }else{
            redirect('index');
        }
    }
}
