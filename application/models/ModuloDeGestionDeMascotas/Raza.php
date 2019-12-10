<?php

class Raza extends CI_Model {
    
    /**
     * Metodo que inserta un raza a la bd
     * Entradas:
     * raza_nombre
     * raza_descripcion
     * raza_especie
     */
    public function insertarRaza($raza_nombre, $raza_descripcion, $raza_especie){
      $data = array("raza_nombre"   =>$raza_nombre,
                    "raza_descripcion"   =>$raza_descripcion,
                    "raza_especie"   =>$raza_especie);      
		return $this->db->insert("razas",$data);
    }
    
    /**
     * Metodo que modifica un raza de la bd
     * Entrada:
     * raza_id
     * raza_nombre: elemento a modificar
     * raza_descripcion: elemento a modificar
     * raza_especie: elemento a modificar
     */
    public function editarRaza($raza_id, $raza_nombre, $raza_descripcion, $raza_especie){
      $this->db->where("raza_id", $raza_id);
		  $data = array("raza_nombre"   =>$raza_nombre,
                    "raza_descripcion"   =>$raza_descripcion,
                    "raza_especie"   =>$raza_especie);       
		  return $this->db->update("razas",$data);
	}
    
    /**
     * Metodo que elimina un raza de la bd
     * Entrada
     * raza_id
     */
    public function eliminarRaza($raza_id){
		  $this->db->where("raza_id", $raza_id);
		  return $this->db->delete("razas");
    }

    /**
     * Metodo que devuelve todos los razas de la bd
     */
    public function razas(){
      return $this->db->get("razas");
    }
}
