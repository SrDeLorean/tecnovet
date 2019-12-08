<?php

class Usuario extends CI_Model {

	/**
	 * Metodo que permite el inicio de sesion por parte de un usuario
	 * Entrada
	 * email
	 * password
	 */
	public function login($email, $password){
		$this->db->where("usuario_email",$email);
		$this->db->where("usuario_password",$password);
		return $this->db->get("usuarios")->result();
	}
	
	/**
	 * Metodo que inserta un usuario de la bd
	 * Entradas
	 * usuario_rut
	 * usuario_nombre
	 * usuario_apellido
	 * usuario_direccion
	 * usuario_email
	 * usuario_telefono
	 * usuario_perfil
	 * usuario_estado
	 * usuario_password
	 * usuario_foto
	 */
	public function insertarUsuario($rut, $nombre, $apellido, $direccion, $email, $telefono, $password, $foto){
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
    
    /**
     * Metodo que modifica un usuario de la bd
     * Entrada:
     * usuario_id
	 * usuario_rut: elemento a modificar
	 * usuario_nombre: elemento a modificar
	 * usuario_apellido: elemento a modificar
	 * usuario_direccion: elemento a modificar
	 * usuario_email: elemento a modificar
	 * usuario_telefono: elemento a modificar
	 * usuario_perfil: elemento a modificar
	 * usuario_estado: elemento a modificar
	 * usuario_password: elemento a modificar
	 * usuario_foto: elemento a modificar
     */
    public function editarUsuario($usuario_id, $usuarios_rut, $usuario_nombre, $usuario_apellido, $usuario_direccion, $usuario_email, $usuario_telefono, $usuario_perfil, $usuario_estado, $usuario_password, $usuario_foto){
		$this->db->where("usuario_id", $usuario_id);
		$data = array("usuario_rut"   =>$usuarios_rut,
					"usuario_nombre"  =>$usuario_nombre,
					"usuario_apellido"=>$usuario_apellido,
					"usuario_direccion"=>$usuario_direccion,
					"usuario_email"   =>$usuario_email,
					"usuario_telefono"=>$usuario_telefono,
					"usuario_perfil"  =>$usuario_perfil,
					"usuario_estado"  =>$usuario_estado,
					"usuario_password"=>$usuario_password,
					"usuario_foto"    =>$usuario_foto);
		return $this->db->update("usuarios",$data);
	}

    /**
     * Metodo que elimina un usuario de la bd
     * Entrada
     * usuario_id
     */
    public function eliminarUsuario($usuario_id){
		$this->db->where("usuario_id", $usuario_id);
		return $this->db->delete("usuarios");
    }

	/**
     * Metodo que devuelve todos los usuario de la bd
     */
	public function Usuarios(){
		return $this->db->get("usuarios")->result();
	}
}
