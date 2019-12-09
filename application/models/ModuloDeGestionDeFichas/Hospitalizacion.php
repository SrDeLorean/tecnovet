<?php

class Hospitalizacion extends CI_Model {
    
    /**
     * Metodo que inserta un hospitalizacion a la bd
     * Entradas:
     * hospitalizacion_nombre
     * hospitalizacion_descripcion
     */
    public function insertarHospitalizacion($hospitalizacion_nombre, $hospitalizacion_descripcion){
        $data = array("hospitalizacion_nombre"   =>$hospitalizacion_nombre,
                    "hospitalizacion_descripcion"   =>$hospitalizacion_descripcion);      
		return $this->db->insert("hospitalizaciones",$data);
    }
    
    /**
     * Metodo que modifica un hospitalizacion de la bd
     * Entrada:
     * hospitalizacion_id
     * hospitalizacion_nombre: elemento a modificar
     * hospitalizacion_descripcion: elemento a modificar
     */
    public function editarHospitalizacion($hospitalizacion_id, $hospitalizacion_nombre, $hospitalizacion_descripcion){
        $this->db->where("hospitalizacion_id", $hospitalizacion_id);
		$data = array("hospitalizacion_nombre"   =>$hospitalizacion_nombre,
                    "hospitalizacion_descripcion"   =>$hospitalizacion_descripcion);       
		return $this->db->update("hospitalizaciones",$data);
	}
    
    /**
     * Metodo que elimina un hospitalizacion de la bd
     * Entrada
     * hospitalizacion_id
     */
    public function eliminarHospitalizacion($hospitalizacion_id){
		$this->db->where("hospitalizacion_id", $hospitalizacion_id);
		return $this->db->delete("hospitalizaciones");
    }

    /**
     * Metodo que devuelve todos los hospitalizacions de la bd
     */
	public function hospitalizaciones(){
		return $this->db->get("hospitalizaciones")->result();
	}
}
