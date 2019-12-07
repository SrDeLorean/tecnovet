<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Veterinario extends CI_Controller {

	/*Para realizar nuevas funciones porfavor utilizar esto para asi mantener los metodos del sistema ocultos
        *Esto hace referencia a que si no se encuentra logeado como tipo veterinario no podra utilizar estos metodos
	public function nombreFuncion(){    
        if($this->session->userdata("veterinario")){
            aca va lo que quiera hacer            
        }else{
            redirect('index');
        }
    */

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		if($this->session->userdata("veterinario")){
			$this->load->view('templateVeterinario/header');
			$this->load->view('veterinario/menuVeterinario');
			$this->load->view('templateVeterinario/footer');
		}else{
            redirect('index');
        }
	}
	
}
