<?php

class Tratamiento extends CI_Model {
    
    /**
     * Metodo que inserta un tratamiento a la bd
     * Entradas:
     * tratamiento_nombre
     * tratamiento_descripcion
     */
    public function insertarTratamiento($tratamiento_nombre, $tratamiento_descripcion){
        $data = array("tratamiento_nombre"   =>$tratamiento_nombre,
                    "tratamiento_descripcion"   =>$tratamiento_descripcion);      
		return $this->db->insert("tratamientos",$data);
    }
    
    /**
     * Metodo que modifica un tratamiento de la bd
     * Entrada:
     * tratamiento_id
     * tratamiento_nombre: elemento a modificar
     * tratamiento_descripcion: elemento a modificar
     */
    public function editarTratamiento($tratamiento_id, $tratamiento_nombre, $tratamiento_descripcion){
        $this->db->where("tratamiento_id", $tratamiento_id);
		$data = array("tratamiento_nombre"   =>$tratamiento_nombre,
                    "tratamiento_descripcion"   =>$tratamiento_descripcion);       
		return $this->db->update("tratamientos",$data);
	}
    
    /**
     * Metodo que elimina un tratamiento de la bd
     * Entrada
     * tratamiento_id
     */
    public function eliminarTratamiento($tratamiento_id){
		$this->db->where("tratamiento_id", $tratamiento_id);
		return $this->db->delete("tratamientos");
    }

    /**
     * Metodo que devuelve todos los tratamientos de la bd
     */
	public function tratamientos(){
		return $this->db->get("tratamientos");
	}
}
