<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('ModuloDeGestionDeUsuario/usuario');
	}
	public function index(){
		$this->load->view('template/header');
		$this->load->view('login');
		$this->load->view('template/footer');
	}

	public function registrar(){
		$this->load->view('template/header');
		$this->load->view('registrar');
		$this->load->view('template/footer');
	}

	//Nota: cabe destacar que el email se refiere al tipo del usuario dado que no tengo otro atributo para guardarlo, esto se va a ocupar posiblemente mas adelante
	public function login(){
		$email 		= $this->input->post('email');
		$password 	= $this->input->post('password');
		$arrayUser 	= $this->usuario->login($email, md5($password));
		if(count($arrayUser)> 0){
			if($arrayUser[0]->usuario_perfil == 1) {
				$this->session->set_userdata('administrador',$arrayUser);
				echo json_encode(array('msg'=>"administrador"));
			}elseif($arrayUser[0]->usuario_perfil == 2) {
				$this->session->set_userdata('veterinario',$arrayUser);
				echo json_encode(array('msg'=>"veterinario"));
			}elseif($arrayUser[0]->usuario_perfil == 3) {
				$this->session->set_userdata('usuario',$arrayUser);
					echo json_encode(array('msg'=>"usuario"));	
			}else {
				echo json_encode(array('msg'=>"0"));
			}
		}else{
			echo json_encode(array('msg'=>"0"));
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('index');
	}

	public function crearUsuario(){
		$rut 		= $this->input->post("rut");
		$nombre 	= $this->input->post("nombre");
		$apellido	= $this->input->post("apellido");
		$direccion	= $this->input->post("direccion");
		$email 		= $this->input->post("email");
		$telefono	= $this->input->post("telefono");
		$perfil		= 3;
		$estado		= 1;
		$password	= $this->input->post("password");
		$path 		= $_FILES["foto"]["tmp_name"];
		if(is_uploaded_file($path)){
			$foto = file_get_contents($path);
			if ($this->usuario->insertarUsuario($rut,$nombre,$apellido,$direccion,$email,$telefono,$perfil,$estado,md5($password),$foto)){
				echo json_encode(array('msg'=>"Registrado"));
			}else{
				echo json_encode(array('msg'=>"Error 500"));
			}
		}else{
			//echo json_encode(array('msg'=>"Error de archivo"));
		}
	}


}