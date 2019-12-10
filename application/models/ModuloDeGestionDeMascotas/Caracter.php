<?php

class Caracter extends CI_Model {
    
    /**
     * Metodo que inserta un caracter a la bd
     * Entradas:
     * caracter_nombre
     * caracter_descripcion
     */
    public function insertarCaracter($caracter_nombre, $caracter_descripcion){
        $data = array("caracter_nombre"   =>$caracter_nombre,
                    "caracter_descripcion"   =>$caracter_descripcion);      
		return $this->db->insert("caracteres",$data);
    }
    
    /**
     * Metodo que modifica un caracter de la bd
     * Entrada:
     * caracter_id
     * caracter_nombre: elemento a modificar
     * caracter_descripcion: elemento a modificar
     */
    public function editarCaracter($caracter_id, $caracter_nombre, $caracter_descripcion){
        $this->db->where("caracter_id", $caracter_id);
		$data = array("caracter_nombre"   =>$caracter_nombre,
                    "caracter_descripcion"   =>$caracter_descripcion);       
		return $this->db->update("caracteres",$data);
	}
    
    /**
     * Metodo que elimina un caracter de la bd
     * Entrada
     * caracter_id
     */
    public function eliminarCaracter($caracter_id){
		$this->db->where("caracter_id", $caracter_id);
		return $this->db->delete("caracteres");
    }

    /**
     * Metodo que devuelve todos los caracteres de la bd
     */
	public function caracteres(){
		return $this->db->get("caracteres");
	}
}
