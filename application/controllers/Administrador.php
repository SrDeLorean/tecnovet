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
            $data["listaMascotas"] = $this->mascota->imprimirMascotas();
            $data["mascotas"] = $this->mascota->mascotas();
            $data["especies"] = $this->especie->especies();
            $data["razas"] = $this->raza->razas();
            $data["caracteres"] = $this->caracter->caracteres();
            $data["sexos"] = $this->sexo->sexos();
            $data["estados"] = $this->estado->estados();
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
     * 
     */
    public function crearUsuario(){
        if($this->session->userdata("administrador")){
            $usuario_rut		= $this->input->post("usuario_rut");
            $usuario_nombre 	= $this->input->post("usuario_nombre");
            $usuario_apellido	= $this->input->post("usuario_apellido");
            $usuario_direccion	= $this->input->post("usuario_direccion");
            $usuario_email 		= $this->input->post("usuario_email");
            $usuario_telefono	= $this->input->post("usuario_telefono");
            $usuario_password	= $this->input->post("usuario_password");
            $usuario_perfil = '3';
            $usuario_estado = '1';
            //---------------Esto da ERROR no reconoce laubicacion "foto" por lo que considera que no hay imagen-----------------
            $path 		= $_FILES["usuario_foto"]["tmp_name"];
            $usuario_foto= '';
            if(is_uploaded_file($path) && !empty($_FILES)){
                $usuario_foto = file_get_contents($path);
            }
            if ($this->usuario->insertarUsuario($usuario_rut,$usuario_nombre,$usuario_apellido,$usuario_direccion,$usuario_email,$usuario_telefono ,$usuario_perfil, $usuario_estado,md5($usuario_password),$usuario_foto)){
                echo json_encode(array('msg'=>"Usuario registrado"));
            }else{
                echo json_encode(array('msg'=>"Error 500"));
            }
        }
	}

    public function editarUsuario(){
        if($this->session->userdata("administrador")){
            $usuario_id         = $this->input->post("editar_id");
            $usuario_rut        = $this->input->post("editar_rut");
            $usuario_nombre     = $this->input->post("editar_nombre");
            $usuario_apellido   = $this->input->post("editar_apellido");
            $usuario_direccion  = $this->input->post("editar_direccion");
            $usuario_email      = $this->input->post("editar_email");
            $usuario_telefono   = $this->input->post("editar_telefono");
            $usuario_perfil     = $this->input->post("editar_perfil");
            $usuario_estado     = $this->input->post("editar_estado");
            $usuario_password   = $this->input->post("editar_contaseña");
            $usuario_foto       = " ";
            $path 		        = $_FILES["foto"]["tmp_name"]; // "foto" debe ser el name del input y no el id
            if(is_uploaded_file($path) && !empty($_FILES)){
                $usuario_foto = file_get_contents($path);
            }
            if ($this->usuario->modificarUsuario($usuario_id, $usuario_rut, $usuario_nombre, $usuario_apellido, $usuario_direccion, $usuario_email, $usuario_telefono, $usuario_perfil, $usuario_estado, md5($usuario_password), $usuario_foto)){
                echo json_encode(array("msg"=>"Usuario actualizado"));
            }else{
                echo json_encode(array("msg"=>"Error 500"));
            }
        }
    }

    public function eliminarUsuario(){
        if($this->session->userdata("administrador")){
            $usuario_id= $this->input->post("usuario_id");
            $this->usuario->eliminarUsuario($usuario_id);
            echo json_encode(array("msg"=>"Usuario eliminado"));
        }
    }

    public function usuarios(){
        if($this->session->userdata("administrador")){
            echo json_encode($this->usuario->usuarios());
        }
    }

    /**
     * 
     */
    public function crearMascota(){
        if($this->session->userdata("administrador")){
            $mascota_usuario = $this->input->post("mascota_usuario");
            $mascota_nombre = $this->input->post("mascota_nombre");
            $mascota_especie = $this->input->post("mascota_especie");
            $mascota_raza = $this->input->post("mascota_raza");
            $mascota_sexo = $this->input->post("mascota_sexo");
            $mascota_fechaNacimiento = $this->input->post("mascota_fechaNacimiento");
            $mascota_color = $this->input->post("mascota_color");
            $mascota_microchip = $this->input->post("mascota_microchip");
            $mascota_foto = $this->input->post("mascota_foto");
            $mascota_caracter = $this->input->post("mascota_caracter");
            $mascota_estado = $this->input->post("mascota_estado");
            $mascota_esterilizacion = $this->input->post("mascota_esterilizacion");
            $mascota_creacion = $this->input->post("mascota_creacion");
            $mascota_actualizacion = $this->input->post("mascota_actualizacion");
            if ($this->mascota->insertarMascota($mascota_usuario, $mascota_nombre, $mascota_especie, $mascota_raza, $mascota_sexo, $mascota_fechaNacimiento, $mascota_color, $mascota_microchip, $mascota_foto, $mascota_caracter, $mascota_estado, $mascota_esterilizacion, $mascota_creacion, $mascota_actualizacion)){
                echo json_encode(array('msg'=>"Perfil registrado"));
            }else{
                echo json_encode(array('msg'=>"Error 500"));
            }
        }
    }

    /**
     * 
     */
    public function crearPerfil(){
        if($this->session->userdata("administrador")){
            $perfil_nombre = $this->input->post("perfil_nombre");
            $perfil_descripcion = $this->input->post("perfil_descripcion");
            if ($this->perfil->insertarPerfil($perfil_nombre,$perfil_descripcion)){
                echo json_encode(array('msg'=>"Perfil registrado"));
            }else{
                echo json_encode(array('msg'=>"Error 500"));
            }
        }
    }

    /**
     * 
     */ 
    public function crearEstado(){
        if($this->session->userdata("administrador")){
            $estado_nombre = $this->input->post("estado_nombre");
            $estado_descripcion = $this->input->post("estado_descripcion");
            if ($this->estado->insertarEstado($estado_nombre,$estado_descripcion)){
                echo json_encode(array('msg'=>"estado registrado"));
            }else{
                echo json_encode(array('msg'=>"Error 500"));
            }
        }
    }

    /**
     * 
     */ 
    public function crearCaracter(){
        if($this->session->userdata("administrador")){
            $caracter_nombre = $this->input->post("caracter_nombre");
            $caracter_descripcion = $this->input->post("caracter_descripcion");
            if ($this->caracter->insertarCaracter($caracter_nombre,$caracter_descripcion)){
                echo json_encode(array('msg'=>"estado registrado"));
            }else{
                echo json_encode(array('msg'=>"Error 500"));
            }
        }
    }

    /**
     * 
     */ 
    public function crearSexo(){
        if($this->session->userdata("administrador")){
            $sexo_nombre = $this->input->post("sexo_nombre");
            $sexo_descripcion = $this->input->post("sexo_descripcion");
            if ($this->sexo->insertarSexo($sexo_nombre,$sexo_descripcion)){
                echo json_encode(array('msg'=>"Sexo registrado"));
            }else{
                echo json_encode(array('msg'=>"Error 500"));
            }
        }
    }

    /**
     * 
     */ 
    public function crearEspecie(){
        if($this->session->userdata("administrador")){
            $especie_nombre = $this->input->post("especie_nombre");
            $especie_descripcion = $this->input->post("especie_descripcion");
            if ($this->sexo->insertarEspecie($especie_nombre,$especie_descripcion)){
                echo json_encode(array('msg'=>"Sexo registrado"));
            }else{
                echo json_encode(array('msg'=>"Error 500"));
            }
        }
    }

}
