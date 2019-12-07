<?php

class Usuario extends CI_Model {

	public function login($email, $password){
		$this->db->where("usuario_email",$email);
		$this->db->where("usuario_password",$password);
		return $this->db->get("usuarios")->result();
	}
	
//------------------------Funcion Crear usuario ------------------------
	public function crearUsuario($rut, $nombre, $apellido, $direccion, $email, $telefono, $password, $foto){
		$data = array("usuarios_rut"   =>$rut,
					"usuario_nombre"  =>$nombre,
					"usuario_apellido"=>$apellido,
					"usuario_direccion"=>$direccion,
					"usuario_email"   =>$email,
					"usuario_telefono"=>$telefono,
					"usuario_perfil"  =>3,
					"usuario_estado"  =>1,
					"usuario_password"=>$password,
					"usuario_foto"    =>$foto);
		return $this->db->insert("usuarios",$data);
	}

}
