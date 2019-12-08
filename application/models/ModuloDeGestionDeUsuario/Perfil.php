<?php

class Perfil extends CI_Model {
    
    /**
     * Metodo que inserta un perfil a la bd
     * Entradas:
     * perfil_nombre
     * perfil_descripcion
     */
    public function insertarPerfil($perfil_nombre, $perfil_descripcion){
        $data = array("perfil_nombre"   =>$perfil_nombre,
                    "perfil_descripcion"   =>$perfil_descripcion);      
		return $this->db->insert("perfiles",$data);
    }
    
    /**
     * Metodo que modifica un perfil de la bd
     * Entrada:
     * perfil_id
     * perfil_nombre: elemento a modificar
     * perfil_descripcion: elemento a modificar
     */
    public function editarPerfil($perfil_id, $perfil_nombre, $perfil_descripcion){
        $this->db->where("perfil_id", $perfil_id);
		$data = array("perfil_nombre"   =>$perfil_nombre,
                    "perfil_descripcion"   =>$perfil_descripcion);      
		return $this->db->update("perfiles",$data);
	}
    
    /**
     * Metodo que elimina un perfil de la bd
     * Entrada
     * perfil_id
     */
    public function eliminarPerfil($perfil_id){
		$this->db->where("perfil_id", $perfil_id);
		return $this->db->delete("perfiles");
    }

    /**
     * Metodo que devuelve todos los perfiles de la bd
     */
	public function Perfiles(){
		return $this->db->get("perfiles")->result();
	}
}
