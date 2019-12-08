<?php

class Especie extends CI_Model {
    
    /**
     * Metodo que inserta un especie a la bd
     * Entradas:
     * especie_nombre
     * especie_descripcion
     */
    public function insertarEspecie($especie_nombre, $especie_descripcion){
        $data = array("especie_nombre"   =>$especie_nombre,
                    "especie_descripcion"   =>$especie_descripcion);      
		return $this->db->insert("especies",$data);
    }
    
    /**
     * Metodo que modifica un especie de la bd
     * Entrada:
     * especie_id
     * especie_nombre: elemento a modificar
     * especie_descripcion: elemento a modificar
     */
    public function editarEspecie($especie_id, $especie_nombre, $especie_descripcion){
        $this->db->where("especie_id", $especie_id);
		$data = array("especie_nombre"   =>$especie_nombre,
                    "especie_descripcion"   =>$especie_descripcion);       
		return $this->db->update("especies",$data);
	}
    
    /**
     * Metodo que elimina un especie de la bd
     * Entrada
     * especie_id
     */
    public function eliminarEspecie($especie_id){
		$this->db->where("especie_id", $especie_id);
		return $this->db->delete("especies");
    }

    /**
     * Metodo que devuelve todos los especies de la bd
     */
	public function especies(){
		return $this->db->get("especies")->result();
	}
}
