<?php

class Consulta extends CI_Model {
    
    /**
     * Metodo que inserta un consulta a la bd
     * Entradas:
     * consulta_nombre
     * consulta_descripcion
     */
    public function insertarConsulta($consulta_nombre, $consulta_descripcion){
        $data = array("consulta_nombre"   =>$consulta_nombre,
                    "consulta_descripcion"   =>$consulta_descripcion);      
		return $this->db->insert("consultas",$data);
    }
    
    /**
     * Metodo que modifica un consulta de la bd
     * Entrada:
     * consulta_id
     * consulta_nombre: elemento a modificar
     * consulta_descripcion: elemento a modificar
     */
    public function editarConsulta($consulta_id, $consulta_nombre, $consulta_descripcion){
        $this->db->where("consulta_id", $consulta_id);
		$data = array("consulta_nombre"   =>$consulta_nombre,
                    "consulta_descripcion"   =>$consulta_descripcion);       
		return $this->db->update("consultas",$data);
	}
    
    /**
     * Metodo que elimina un consulta de la bd
     * Entrada
     * consulta_id
     */
    public function eliminarConsulta($consulta_id){
		$this->db->where("consulta_id", $consulta_id);
		return $this->db->delete("consultas");
    }

    /**
     * Metodo que devuelve todos los consultas de la bd
     */
	public function consultas(){
		return $this->db->get("consultas");
	}
}
