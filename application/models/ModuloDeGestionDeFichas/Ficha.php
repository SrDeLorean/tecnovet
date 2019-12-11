<?php

class Ficha extends CI_Model {
    
    /**
     * Metodo que inserta un vacuna a la bd
     */
    public function insertarFicha($vacuna_mascota, $vacuna_control, $vacuna_confirmacion, $vacuna_creacion, $vacuna_actualizacion){
        $data = array("vacuna_mascota"   =>$vacuna_mascota,
                    "vacuna_control"   =>$vacuna_control,
                    "vacuna_confirmacion"   =>$vacuna_confirmacion,
                    "vacuna_creacion"   =>$vacuna_creacion,
                    "vacuna_actualizacion"   =>$vacuna_actualizacion);      
		return $this->db->insert("fichas",$data);
    }
    
    /**
     * Metodo que modifica un vacuna de la bd
     */
    public function editarFicha($vacuna_id, $vacuna_mascota, $vacuna_control, $vacuna_confirmacion, $vacuna_creacion, $vacuna_actualizacion){
        $this->db->where("vacuna_id", $vacuna_id);
		$data = array("vacuna_mascota"   =>$vacuna_mascota,
                    "vacuna_control"   =>$vacuna_control,
                    "vacuna_confirmacion"   =>$vacuna_confirmacion,
                    "vacuna_creacion"   =>$vacuna_creacion,
                    "vacuna_actualizacion"   =>$vacuna_actualizacion);        
		return $this->db->update("fichas",$data);
	}
    
    /**
     * Metodo que elimina un vacuna de la bd
     */
    public function eliminarFicha($vacuna_id){
		$this->db->where("vacuna_id", $vacuna_id);
		return $this->db->delete("fichas");
    }

    /**
     * Metodo que devuelve todos los vacunas de la bd
     */
	public function fichas(){
		return $this->db->get("fichas");
	}
}
