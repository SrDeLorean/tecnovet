<?php

class Historialhospitalizacion extends CI_Model {
    
    /**
     * Metodo que inserta un historialhospitalizacion a la bd
     * Entradas:
     * historialhospitalizacion_hospitalizacion
     * historialhospitalizacion_visita
     */
    public function insertarHistorialhospitalizacion($historialhospitalizacion_hospitalizacion, $historialhospitalizacion_visita){
        $data = array("historialhospitalizacion_hospitalizacion"   =>$historialhospitalizacion_hospitalizacion,
                    "historialhospitalizacion_visita"   =>$historialhospitalizacion_visita);      
		return $this->db->insert("historialhospitalizaciones",$data);
    }
    
    /**
     * Metodo que modifica un historialhospitalizacion de la bd
     * Entrada:
     * historialhospitalizacion_id
     * historialhospitalizacion_hospitalizacion: elemento a modificar
     * historialhospitalizacion_visita: elemento a modificar
     */
    public function editarHistorialhospitalizacion($historialhospitalizacion_id, $historialhospitalizacion_hospitalizacion, $historialhospitalizacion_visita){
        $this->db->where("historialhospitalizacion_id", $historialhospitalizacion_id);
		$data = array("historialhospitalizacion_hospitalizacion"   =>$historialhospitalizacion_hospitalizacion,
                    "historialhospitalizacion_visita"   =>$historialhospitalizacion_visita);       
		return $this->db->update("historialhospitalizaciones",$data);
	}
    
    /**
     * Metodo que elimina un historialhospitalizacion de la bd
     * Entrada
     * historialhospitalizacion_id
     */
    public function eliminarHistorialhospitalizacion($historialhospitalizacion_id){
		$this->db->where("historialhospitalizacion_id", $historialhospitalizacion_id);
		return $this->db->delete("historialhospitalizaciones");
    }

    /**
     * Metodo que devuelve todos los historialhospitalizacion de la bd
     */
	public function historialhospitalizaciones(){
		return $this->db->get("historialhospitalizaciones")->result();
	}
}
