<?php

class Vacuna extends CI_Model {
    
    /**
     * Metodo que inserta un vacuna a la bd
     * Entradas:
     * vacuna_nombre
     * vacuna_descripcion
     * vacuna_especie
     */
    public function insertarVacuna($vacuna_nombre, $vacuna_descripcion, $vacuna_especie){
        $data = array("vacuna_nombre"   =>$vacuna_nombre,
                    "vacuna_descripcion"   =>$vacuna_descripcion,
                    "vacuna_especie"   =>$vacuna_especie);      
		return $this->db->insert("vacunas",$data);
    }
    
    /**
     * Metodo que modifica un vacuna de la bd
     * Entrada:
     * vacuna_id
     * vacuna_nombre: elemento a modificar
     * vacuna_descripcion: elemento a modificar
     * vacuna_especie: elemento a modificar
     */
    public function editarVacuna($vacuna_id, $vacuna_nombre, $vacuna_descripcion, $vacuna_especie){
        $this->db->where("vacuna_id", $vacuna_id);
		$data = array("vacuna_nombre"   =>$vacuna_nombre,
                    "vacuna_descripcion"   =>$vacuna_descripcion,
                    "vacuna_especie"   =>$vacuna_especie);       
		return $this->db->update("vacunas",$data);
	}
    
    /**
     * Metodo que elimina un vacuna de la bd
     * Entrada
     * vacuna_id
     */
    public function eliminarVacuna($vacuna_id){
		$this->db->where("vacuna_id", $vacuna_id);
		return $this->db->delete("vacunas");
    }

    /**
     * Metodo que devuelve todos los vacunas de la bd
     */
	public function vacunas(){
		return $this->db->get("vacunas")->result();
	}
}
