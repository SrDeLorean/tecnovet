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

    /**
     * Modulo de gestion de usuario
     */
    public function crearUsuario(){
        if($this->session->userdata("administrador")){
            $usuarios_rut= $this->input->post("usuarios_rut");
            $usuario_nombre= $this->input->post("usuario_nombre");
            $usuario_apellido= $this->input->post("usuario_apellido");
            $usuario_direccion= $this->input->post("usuario_direccion");
            $usuario_email= $this->input->post("usuario_email");
            $usuario_telefono= $this->input->post("usuario_telefono");
            $usuario_perfil= $this->input->post("usuario_perfil");
            $usuario_estado= $this->input->post("usuario_estado");
            $usuario_password= $this->input->post("usuario_password");
            $usuario_foto= $this->input->post("usuario_foto");
            $this->usuario->crearUsuario($usuarios_rut, $usuario_nombre, $usuario_apellido, $usuario_direccion, $usuario_email, $usuario_telefono, $usuario_perfil, $usuario_estado, $usuario_password, $usuario_foto);
            echo json_encode(array("msg"=>"Perfil creado"));
        }
    }

    public function editarUsuario(){
        if($this->session->userdata("administrador")){
            $usuario_id= $this->input->post("usuario_id");
            $usuarios_rut= $this->input->post("usuarios_rut");
            $usuario_nombre= $this->input->post("usuario_nombre");
            $usuario_apellido= $this->input->post("usuario_apellido");
            $usuario_direccion= $this->input->post("usuario_direccion");
            $usuario_email= $this->input->post("usuario_email");
            $usuario_telefono= $this->input->post("usuario_telefono");
            $usuario_perfil= $this->input->post("usuario_perfil");
            $usuario_estado= $this->input->post("usuario_estado");
            $usuario_password= $this->input->post("usuario_password");
            $usuario_foto= $this->input->post("usuario_foto");
            $this->usuario->editarUsuario($usuario_id, $usuarios_rut, $usuario_nombre, $usuario_apellido, $usuario_direccion, $usuario_email, $usuario_telefono, $usuario_perfil, $usuario_estado, $usuario_password, $usuario_foto);
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
