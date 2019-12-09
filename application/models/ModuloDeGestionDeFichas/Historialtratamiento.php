<?php

class Historialtratamiento extends CI_Model {
    
    /**
     * Metodo que inserta un historialtratamiento a la bd
     * Entradas:
     * historialtratamiento_tratamiento
     * historialtratamiento_visita
     */
    public function insertarHistorialtratamiento($historialtratamiento_tratamiento, $historialtratamiento_visita){
        $data = array("historialtratamiento_tratamiento"   =>$historialtratamiento_tratamiento,
                    "historialtratamiento_visita"   =>$historialtratamiento_visita);      
		return $this->db->insert("historialtratamiento",$data);
    }
    
    /**
     * Metodo que modifica un historialtratamiento de la bd
     * Entrada:
     * historialtratamiento_id
     * historialtratamiento_tratamiento: elemento a modificar
     * historialtratamiento_visita: elemento a modificar
     */
    public function editarHistorialtratamiento($historialtratamiento_id, $historialtratamiento_tratamiento, $historialtratamiento_visita){
        $this->db->where("historialtratamiento_id", $historialtratamiento_id);
		$data = array("historialtratamiento_tratamiento"   =>$historialtratamiento_tratamiento,
                    "historialtratamiento_visita"   =>$historialtratamiento_visita);       
		return $this->db->update("historialtratamiento",$data);
	}
    
    /**
     * Metodo que elimina un historialtratamiento de la bd
     * Entrada
     * historialtratamiento_id
     */
    public function eliminarHistorialtratamiento($historialtratamiento_id){
		$this->db->where("historialtratamiento_id", $historialtratamiento_id);
		return $this->db->delete("historialtratamiento");
    }

    /**
     * Metodo que devuelve todos los historialtratamiento de la bd
     */
	public function historialtratamientos(){
		return $this->db->get("historialtratamiento")->result();
	}
}
