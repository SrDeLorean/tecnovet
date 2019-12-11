<?php

class Estado extends CI_Model {
    
    /**
     * Metodo que inserta un estado a la bd
     * Entradas:
     * estado_nombre
     * estado_descripcion
     */
    public function insertarEstado($estado_nombre, $estado_descripcion){
      $data = array("estado_nombre"   =>$estado_nombre,
                  "estado_descripcion"   =>$estado_descripcion);      
		  return $this->db->insert("estados",$data);
    }
    
    /**
     * Metodo que modifica un estado de la bd
     * Entrada:
     * estado_id
     * estado_nombre: elemento a modificar
     * estado_descripcion: elemento a modificar
     */
    public function editarEstado($estado_id, $estado_nombre, $estado_descripcion){
        $this->db->where("estado_id", $estado_id);
		$data = array("estado_nombre"   =>$estado_nombre,
                    "estado_descripcion"   =>$estado_descripcion);       
		return $this->db->update("estados",$data);
	}
    
    /**
     * Metodo que elimina un estado de la bd
     * Entrada
     * estado_id
     */
    public function eliminarEstado($estado_id){
		$this->db->where("estado_id", $estado_id);
		return $this->db->delete("estados");
    }

    /**
     * Metodo que devuelve todos los estados de la bd
     */
	public function estados(){
		return $this->db->get("estados");
	}
}
