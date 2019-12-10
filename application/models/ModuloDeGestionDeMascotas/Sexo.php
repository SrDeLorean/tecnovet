<?php

class Sexo extends CI_Model {
    
    /**
     * Metodo que inserta un Sexo a la bd
     * Entradas:
     * sexo_nombre
     * sexo_descripcion
     */
    public function insertarSexo($sexo_nombre, $sexo_descripcion){
        $data = array("sexo_nombre"   =>$sexo_nombre,
                    "sexo_descripcion"   =>$sexo_descripcion);      
		return $this->db->insert("sexos",$data);
    }
    
    /**
     * Metodo que modifica un Sexo de la bd
     * Entrada:
     * sexo_id
     * sexo_nombre: elemento a modificar
     * sexo_descripcion: elemento a modificar
     */
    public function editarSexo($sexo_id, $sexo_nombre, $sexo_descripcion){
        $this->db->where("sexo_id", $sexo_id);
		$data = array("sexo_nombre"   =>$sexo_nombre,
                    "sexo_descripcion"   =>$sexo_descripcion);      
		return $this->db->update("sexos",$data);
	}
    
    /**
     * Metodo que elimina un Sexo de la bd
     * Entrada
     * sexo_id
     */
    public function eliminarSexo($sexo_id){
		$this->db->where("sexo_id", $sexo_id);
		return $this->db->delete("sexos");
    }

    /**
     * Metodo que devuelve todos los Sexos de la bd
     */
	public function sexos(){
		return $this->db->get("sexos");
	}
}
