<?php

class Historialvacuna extends CI_Model {
    
    /**
     * Metodo que inserta un historialvacuna a la bd
     * Entradas:
     * historialvacuna_vacuna
     * historialvacuna_visita
     */
    public function insertarHistorialvacuna($historialvacuna_vacuna, $historialvacuna_visita){
        $data = array("historialvacuna_vacuna"   =>$historialvacuna_vacuna,
                    "historialvacuna_visita"   =>$historialvacuna_visita);      
		return $this->db->insert("historialvacunas",$data);
    }
    
    /**
     * Metodo que modifica un historialvacuna de la bd
     * Entrada:
     * historialvacuna_id
     * historialvacuna_vacuna: elemento a modificar
     * historialvacuna_visita: elemento a modificar
     */
    public function editarHistorialvacuna($historialvacuna_id, $historialvacuna_vacuna, $historialvacuna_visita){
        $this->db->where("historialvacuna_id", $historialvacuna_id);
		$data = array("historialvacuna_vacuna"   =>$historialvacuna_vacuna,
                    "historialvacuna_visita"   =>$historialvacuna_visita);       
		return $this->db->update("historialvacunas",$data);
	}
    
    /**
     * Metodo que elimina un historialvacuna de la bd
     * Entrada
     * historialvacuna_id
     */
    public function eliminarHistorialvacuna($historialvacuna_id){
		$this->db->where("historialvacuna_id", $historialvacuna_id);
		return $this->db->delete("historialvacunas");
    }

    /**
     * Metodo que devuelve todos los historialvacuna de la bd
     */
	public function historialvacunas(){
		return $this->db->get("historialvacunas")->result();
	}
}
