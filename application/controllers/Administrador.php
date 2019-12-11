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
        //modulo de gestion de usuarios
        $this->load->model('ModuloDeGestionDeUsuario/usuario');
        $this->load->model('ModuloDeGestionDeUsuario/perfil');
        //Moodulo de gestion de mascotas
        $this->load->model('ModuloDeGestionDeMascotas/caracter');
        $this->load->model('ModuloDeGestionDeMascotas/especie');
        $this->load->model('ModuloDeGestionDeMascotas/estado');
        $this->load->model('ModuloDeGestionDeMascotas/mascota');
        $this->load->model('ModuloDeGestionDeMascotas/raza');
        $this->load->model('ModuloDeGestionDeMascotas/sexo');
        //modulo de gestion de fichas
        $this->load->model('ModuloDeGestionDeFichas/ficha');
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
        
    public function dueno(){
        if($this->session->userdata("administrador")){
            $this->load->view('administrador/templateAdmin/header');
            $this->load->database();
            $data["duenos"] = $this->dueno->duenos();
            $this->load->view('administrador/dueno', $data);
            $this->load->view('administrador/templateAdmin/footer');
        }else{
            redirect('index');
        }
	}

    public function perfil(){
        if($this->session->userdata("administrador")){
            $this->load->view('administrador/templateAdmin/header');
            $this->load->database();
            $data["perfiles"] = $this->perfil->perfiles();
            $this->load->view('administrador/perfil', $data);
            $this->load->view('administrador/templateAdmin/footer');
        }else{
            redirect('index');
        }
    }

    public function mascota(){
        if($this->session->userdata("administrador")){
            $this->load->view('administrador/templateAdmin/header');
            $this->load->database();
            $data["mascotas"] = $this->mascota->mascotas();
            $this->load->view('administrador/mascota', $data);
            $this->load->view('administrador/templateAdmin/footer');
        }else{
            redirect('index');
        }
    }
    public function estado(){
        if($this->session->userdata("administrador")){
            $this->load->view('administrador/templateAdmin/header');
            $this->load->database();
            $data["estados"] = $this->estado->estados();
            $this->load->view('administrador/estado', $data);
            $this->load->view('administrador/templateAdmin/footer');
        }else{
            redirect('index');
        }
    }
    public function caracter(){
        if($this->session->userdata("administrador")){
            $this->load->view('administrador/templateAdmin/header');
            $this->load->database();
            $data["caracteres"] = $this->caracter->caracteres();
            $this->load->view('administrador/caracter', $data);
            $this->load->view('administrador/templateAdmin/footer');
        }else{
            redirect('index');
        }
    }
    public function sexo(){
        if($this->session->userdata("administrador")){
            $this->load->view('administrador/templateAdmin/header');
            $this->load->database();
            $data["sexos"] = $this->sexo->sexos();
            $this->load->view('administrador/sexo', $data);
            $this->load->view('administrador/templateAdmin/footer');
        }else{
            redirect('index');
        }
    }
    public function especie(){
        if($this->session->userdata("administrador")){
            $this->load->view('administrador/templateAdmin/header');
            $this->load->database();
            $data["especies"] = $this->especie->especies();
            $this->load->view('administrador/especie', $data);
            $this->load->view('administrador/templateAdmin/footer');
        }else{
            redirect('index');
        }
    }
    public function raza(){
        if($this->session->userdata("administrador")){
            $this->load->view('administrador/templateAdmin/header');
            $this->load->database();
            $data["razas"] = $this->raza->razas();
            $this->load->view('administrador/raza', $data);
            $this->load->view('administrador/templateAdmin/footer');
        }else{
            redirect('index');
        }
    }
    public function ficha(){
        if($this->session->userdata("administrador")){
            $this->load->view('administrador/templateAdmin/header');
            $this->load->database();
            $data["fichas"] = $this->ficha->fichas();
            $this->load->view('administrador/ficha', $data);
            $this->load->view('administrador/templateAdmin/footer');
        }else{
            redirect('index');
        }
    }

    /**
     * Modulo de gestion de usuario
     */
    

    public function editarUsuario(){
        if($this->session->userdata("administrador")){
            $usuario_id= $this->input->post("usuario_id");
            $usuario_rut= $this->input->post("usuario_rut");
            $usuario_nombre= $this->input->post("usuario_nombre");
            $usuario_apellido= $this->input->post("usuario_apellido");
            $usuario_direccion= $this->input->post("usuario_direccion");
            $usuario_email= $this->input->post("usuario_email");
            $usuario_telefono= $this->input->post("usuario_telefono");
            $usuario_perfil= $this->input->post("usuario_perfil");
            $usuario_estado= $this->input->post("usuario_estado");
            $usuario_password= $this->input->post("usuario_password");
            $usuario_foto= $this->input->post("usuario_foto");
            $this->usuario->editarUsuario($usuario_id, $usuario_rut, $usuario_nombre, $usuario_apellido, $usuario_direccion, $usuario_email, $usuario_telefono, $usuario_perfil, $usuario_estado, $usuario_password, $usuario_foto);
            echo json_encode(array("msg"=>"Perfil actualizado"));
        }
    }

    public function eliminarUsuario(){
        if($this->session->userdata("administrador")){
            $usuario_id= $this->input->post("usuario_id");
            $this->usuario->eliminarUsuario($usuario_id);
            echo json_encode(array("msg"=>"Perfil eliminado"));
        }
    }

    public function usuarios(){
        if($this->session->userdata("administrador")){
            echo json_encode($this->usuario->usuarios());
        }
    }

}
