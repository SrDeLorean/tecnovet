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
        $this->load->model('ModuloDeGestionDeFichas/vacuna');
        $this->load->model('ModuloDeGestionDeFichas/tratamiento');
        $this->load->model('ModuloDeGestionDeFichas/hospitalizacion');
        $this->load->model('ModuloDeGestionDeFichas/consulta');
        $this->load->model('ModuloDeGestionDeFichas/visita');

        //Modulo de detalles
        $this->load->model('ModuloDeGestionDeDetalles/detalleFicha');
        $this->load->model('ModuloDeGestionDeDetalles/detalleVisita');
        $this->load->model('ModuloDeGestionDeDetalles/detalleMascota');
        $this->load->model('ModuloDeGestionDeDetalles/detalleUsuario');       
    }
    
    public function index(){
        if($this->session->userdata("administrador")){
            $this->load->view('administrador/templateAdmin/header');
            $this->load->database();
            $data["fichas"] = $this->ficha->imprimirFichasPorFecha("2019-12-13");
            $this->load->view('administrador/menuAdministrador', $data);
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

    public function editarPerfil(){
        $perfil_id = $this->input->post('editar_id');
        $perfil_nombre = $this->input->post('editar_nombre');
        $perfil_descripcion = $this->input->post('editar_descripcion');
		if ($this->perfil->editarPerfil($perfil_id, $perfil_nombre, $perfil_descripcion)){
			echo json_encode(array('msg'=>"Perfil editado"));
		}else{
			echo json_encode(array('msg'=>"Error editando ficha"));
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

    public function editarEstado(){
        $estado_id = $this->input->post('editar_id');
        $estado_nombre = $this->input->post('editar_nombre');
        $estado_descripcion = $this->input->post('editar_descripcion');
		if ($this->estado->editarEstado($estado_id, $estado_nombre, $estado_descripcion)){
			echo json_encode(array('msg'=>"estado editado"));
		}else{
			echo json_encode(array('msg'=>"Error editando estado"));
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

    public function editarCaracter(){
        $caracter_id = $this->input->post('editar_id');
        $caracter_nombre = $this->input->post('editar_nombre');
        $caracter_descripcion = $this->input->post('editar_descripcion');
		if ($this->caracter->editarCaracter($caracter_id, $caracter_nombre, $caracter_descripcion)){
			echo json_encode(array('msg'=>"Caracter editado"));
		}else{
			echo json_encode(array('msg'=>"Error editando caracter"));
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

    public function editarSexo(){
        $sexo_id = $this->input->post('editar_id');
        $sexo_nombre = $this->input->post('editar_nombre');
        $sexo_descripcion = $this->input->post('editar_descripcion');
		if ($this->sexo->editarSexo($sexo_id, $sexo_nombre, $sexo_descripcion)){
			echo json_encode(array('msg'=>"sexo editado"));
		}else{
			echo json_encode(array('msg'=>"Error editando sexo"));
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

    public function editarEspecie(){
        $especie_id = $this->input->post('editar_id');
        $especie_nombre = $this->input->post('editar_nombre');
        $especie_descripcion = $this->input->post('editar_descripcion');
		if ($this->especie->editarEspecie($especie_id, $especie_nombre, $especie_descripcion)){
			echo json_encode(array('msg'=>"especie editado"));
		}else{
			echo json_encode(array('msg'=>"Error editando especie"));
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

    public function editarRaza(){
        $raza_id = $this->input->post('editar_id');
        $raza_nombre = $this->input->post('editar_nombre');
        $raza_descripcion = $this->input->post('editar_descripcion');
		if ($this->raza->editarRaza($raza_id, $raza_nombre, $raza_descripcion)){
			echo json_encode(array('msg'=>"raza editado"));
		}else{
			echo json_encode(array('msg'=>"Error editando raza"));
		}
    }

    public function ficha(){
        if($this->session->userdata("administrador")){
            $this->load->view('administrador/templateAdmin/header');
            $this->load->database();
            $data["fichas"] = $this->ficha->imprimirFichas();
            $this->load->view('administrador/ficha', $data);
            $this->load->view('administrador/templateAdmin/footer');
        }else{
            redirect('index');
        }
    }
    public function cargarFicha(){
        if($this->session->userdata("administrador")){
        $id = $this->input->post('');
        $data["vistaFicha"] =  $this->ficha->cargarFicha($id);
        return $data;
        }else{
            redirect('index');
        }
      }

    public function vacuna(){
        if($this->session->userdata("administrador")){
            $this->load->view('administrador/templateAdmin/header');
            $this->load->database();
            $this->db->select("vacuna_id, vacuna_nombre, vacuna_descripcion, especie_nombre");
            $this->db->from("vacunas");
            $this->db->join("especies", "vacunas.vacuna_especie=especies.especie_id");
            $data["vacuna"] = $this->db->get();
            $this->load->view('administrador/vacuna', $data);
            $this->load->view('administrador/templateAdmin/footer');
        }else{
            redirect('index');
        }
    }
    public function tratamiento(){
        if($this->session->userdata("administrador")){
            $this->load->view('administrador/templateAdmin/header');
            $this->load->database();
            $data["tratamiento"] = $this->tratamiento->tratamientos();
            $this->load->view('administrador/tratamiento', $data);
            $this->load->view('administrador/templateAdmin/footer');
        }else{
            redirect('index');
        }
    }
    public function hospitalizacion(){
        if($this->session->userdata("administrador")){
            $this->load->view('administrador/templateAdmin/header');
            $this->load->database();
            $data["hospitalizacion"] = $this->hospitalizacion->hospitalizaciones();
            $this->load->view('administrador/hospitalizacion', $data);
            $this->load->view('administrador/templateAdmin/footer');
        }else{
            redirect('index');
        }
    }
    public function consulta(){
        if($this->session->userdata("administrador")){
            $this->load->view('administrador/templateAdmin/header');
            $this->load->database();
            $data["consulta"] = $this->consulta->consultas();
            $this->load->view('administrador/consulta', $data);
            $this->load->view('administrador/templateAdmin/footer');
        }else{
            redirect('index');
        }
    }
    public function visita(){
        if($this->session->userdata("administrador")){
            $this->load->view('administrador/templateAdmin/header');
            $this->load->database();
            $data["visita"] = $this->visita->visitas();
            $data["imprimirVisitas"] = $this->visita->imprimirVisitas();
            $this->load->view('administrador/visita', $data);
            $this->load->view('administrador/templateAdmin/footer');
        }else{
            redirect('index');
        }
    }

    public function detalleVisita(){
        if($this->session->userdata("administrador")){
            $this->load->view('administrador/templateAdmin/header');
            $this->load->database();
            $data["visita"] = $this->visita->visitas();
            $this->load->view('administrador/detalleVisita', $data);
            $this->load->view('administrador/templateAdmin/footer');
        }else{
            redirect('index');
        }
    }
    public function detalleFicha(){
        if($this->session->userdata("administrador")){
            $this->load->view('administrador/templateAdmin/header');
            $this->load->database();
            $data["fichas"] = $this->ficha->fichas();
            $this->load->view('administrador/detalleFicha', $data);
            $this->load->view('administrador/templateAdmin/footer');
        }else{
            redirect('index');
        }
    }

    public function editarFicha(){
        $vacuna_id = $this->input->post('vacuna_id');
        $vacuna_mascota = $this->input->post('vacuna_mascota');
        $vacuna_control = $this->input->post('vacuna_control');
        $vacuna_confirmacion = $this->input->post('vacuna_confirmacion');
        $vacuna_creacion = $this->input->post('vacuna_creacion');
        $vacuna_actualizacion = $this->input->post('vacuna_actualizacion');
		if ($this->ficha->editarFicha($vacuna_id, $vacuna_mascota, $vacuna_control, $vacuna_confirmacion, $vacuna_creacion, $vacuna_actualizacion)){
			echo json_encode(array('msg'=>"Ficha editada"));
		}else{
			echo json_encode(array('msg'=>"Error editando ficha"));
		}
    }

    public function detalleMascota(){
        if($this->session->userdata("administrador")){
            $this->load->view('administrador/templateAdmin/header');
            $this->load->database();
            $data["mascotas"] = $this->mascota->mascotas();
            $this->load->view('administrador/detalleMascota', $data);
            $this->load->view('administrador/templateAdmin/footer');
        }else{
            redirect('index');
        }
    }
    public function detalleUsuario(){
        if($this->session->userdata("administrador")){
            $this->load->view('administrador/templateAdmin/header');
            $this->load->database();
            $data["usuarios"] = $this->usuario->usuarios();
            $this->load->view('administrador/detalleUsuario', $data);
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
            //---------------Esto da ERROR no reconoce la ubicacion "foto" por lo que considera que no hay imagen-----------------
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
            $usuario_password   = $this->input->post("editar_contraseña");
            $usuario_foto       = " ";
            $path 		        = $_FILES["editar_foto"]["tmp_name"]; // "foto" debe ser el name del input y no el id
            if(is_uploaded_file($path) && !empty($_FILES)){
                $usuario_foto = file_get_contents($path);
            }
            if ($this->usuario->editarUsuario($usuario_id, $usuario_rut, $usuario_nombre, $usuario_apellido, $usuario_direccion, $usuario_email, $usuario_telefono, $usuario_perfil, $usuario_estado, md5($usuario_password), $usuario_foto)){
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
