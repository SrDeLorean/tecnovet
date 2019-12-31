<?php

class Visita extends CI_Model {
    
    /**
     * Metodo que inserta un visita a la bd
     */
    public function insertarVisita($visita_usuario, $visita_ficha, $visita_consulta, $visita_fr, $visita_fc, $visita_precion, $visita_mucosa, $visita_temperatura, $visita_fecha, $visita_documento, $visita_observacion){
        $data = array("visita_usuario"   =>$visita_usuario,
                    "visita_ficha"   =>$visita_ficha,
                    "visita_consulta"   =>$visita_consulta,
                    "visita_fr"   =>$visita_fr,
                    "visita_fc"   =>$visita_fc,
                    "visita_precion"   =>$visita_precion,
                    "visita_mucosa"   =>$visita_mucosa,
                    "visita_temperatura"   =>$visita_temperatura,
                    "visita_fecha"   =>$visita_fecha,
                    "visita_documento"   =>$visita_documento,
                    "visita_observacion"   =>$visita_observacion );      
		return $this->db->insert("visitas",$data);
    }
    
    /**
     * Metodo que modifica un visita de la bd
     */
    public function editarVisita($visita_id, $visita_usuario, $visita_ficha, $visita_consulta, $visita_fr, $visita_fc, $visita_precion, $visita_mucosa, $visita_temperatura, $visita_fecha, $visita_documento, $visita_observacion){
        $this->db->where("visita_id", $visita_id);
		$data = array("visita_usuario"   =>$visita_usuario,
                    "visita_ficha"   =>$visita_ficha,
                    "visita_consulta"   =>$visita_consulta,
                    "visita_fr"   =>$visita_fr,
                    "visita_fc"   =>$visita_fc,
                    "visita_precion"   =>$visita_precion,
                    "visita_mucosa"   =>$visita_mucosa,
                    "visita_temperatura"   =>$visita_temperatura,
                    "visita_fecha"   =>$visita_fecha,
                    "visita_documento"   =>$visita_documento,
                    "visita_observacion"   =>$visita_observacion );        
		return $this->db->update("visitas",$data);
	}
    
    /**
     * Metodo que elimina un visita de la bd
     * Entrada
     * visita_id
     */
    public function eliminarVisita($visita_id){
		$this->db->where("visita_id", $visita_id);
		return $this->db->delete("visitas");
    }

    /**
     * Metodo que devuelve todos los visitaes de la bd
     */
	public function visitas(){
    return $this->db->get("visitas");

  }
  
  public function imprimirVisitas(){
    $this->db->SELECT ("visita_id, usuario_nombre, usuario_apellido, mascota_nombre, consulta_nombre,  visita_fr, visita_fc, visita_precion, visita_mucosa, visita_temperatura, visita_fecha,visita_documento, visita_observacion");
    $this->db->FROM ("visitas,usuarios,mascotas,consultas, fichas");
    $this->db->WHERE ("mascota_id=ficha_mascota and mascota_usuario=usuario_id and consulta_id=visita_consulta and visita_ficha=ficha_id");
    return $this->db->get();
  }

}
