<?php

class Usuario extends CI_Model {

	public function login($email, $password){
		$this->db->where("email",$email);
		$this->db->where("password",$password);
		return $this->db->get("usuario")->result();
	}
	
//------------------------Funcion Crear usuario ------------------------
	public function crearUsuario($rut, $nombre, $apellido, $direccion, $email, $telefono, $password, $foto){
		$data = array("rut"   =>$rut,
					"nombre"  =>$nombre,
					"apellido"=>$apellido,
					"direccion"=>$direccion,
					"email"   =>$email,
					"telefono"=>$telefono,
					"perfil"  =>3,
					"estado"  =>1,
					"password"=>$password,
					"foto"    =>$foto);
		return $this->db->insert("usuario",$data);
	}

}
