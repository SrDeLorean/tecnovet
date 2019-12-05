<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->model('usuario');
	}
	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('login');
		$this->load->view('template/footer');
	}

	public function registrar(){
		$this->load->view('template/header');
		$this->load->view('registrar');
		$this->load->view('template/footer');
	}

	// Carga de archivos para el menu ADMINISTRADOR
	public function menuAdministrador(){
		$this->load->view('templateAdmin/header');
		$this->load->view('menuADministrador');
		$this->load->view('templateAdmin/footer');

	}
        
        public function usuarios() {
                $this->load->view('templateAdmin/header');
		$this->load->view('usuarios');
		$this->load->view('templateAdmin/footer');
                
        }
        
        public function duenos() {
        $this->load->view('templateAdmin/header');
        $this->load->view('duenos');
        $this->load->view('templateAdmin/footer');

}

	// Carga de archivos para el menu ADMINISTRADOR

        public function perfiles() {
                $this->load->view('templateAdmin/header');
		$this->load->view('perfiles');
		$this->load->view('templateAdmin/footer');
        }


	public function login(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$arrayUser = $this->usuario->login($email, md5($password));
		if(count($arrayUser)> 0){
			if($arrayUser[0]->perfil == 1) {
				echo json_encode(array('msg'=>"Administrador"));
			}elseif($arrayUser[0]->perfil == 2) {
				echo json_encode(array('msg'=>"Veterinario"));
			}else {
				echo json_encode(array('msg'=>"Usuario"));
			}
		}else{
			echo json_encode(array('msg'=>"Usuario o Contraseña Invalido"));
		}
	}

	public function crearUsuario(){
		$rut 		= $this->input->post("rut");
		$nombre 	= $this->input->post("nombre");
		$apellido	= $this->input->post("apellido");
		$direccion	= $this->input->post("direccion");
		$email 		= $this->input->post("email");
		$telefono	= $this->input->post("telefono");
		$password	= $this->input->post("password");
//---------------Esto da ERROR no reconoce laubicacion "foto" por lo que considera que no hay imagen-----------------
		$path 		= $_FILES["foto"]["tmp_name"];

		if(is_uploaded_file($path) && !empty($_FILES)){
			$foto = file_get_contents($path);
			if ($this->usuario->crearUsuario($rut,$nombre,$apellido,$direccion,$email,$telefono,md5($password),$foto)){
				echo json_encode(array('msg'=>"Registrado"));
			}else{
				echo json_encode(array('msg'=>"Error 500"));
			}
		}else{
			//echo json_encode(array('msg'=>"Error de archivo"));
		}
	}


}