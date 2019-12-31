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
  public function imprimirFichas(){
    $this->db->select("ficha_id,usuario_nombre,usuario_apellido,usuario_rut, mascota_nombre, mascota_microchip, ficha_control, ficha_confirmacion, ficha_creacion, ficha_actualizacion");
    $this->db->from("fichas");
    $this->db->join("mascotas", "fichas.ficha_mascota=mascotas.mascota_id");
    $this->db->join("usuarios", "mascotas.mascota_usuario=usuarios.usuario_id");
    return $this->db->get();
  }
  public function cargarFicha($id){
    $this->db->select("visita_id, usuario_nombre, usuario_apellido, consulta_nombre, visita_observacion, visita_fecha, visita_documento");
    $this->db->from("visitas");
    $this->db->join("consultas", "consultas.consulta_id = visitas.visita_consulta");
    $this->db->join("usuarios", "visitas.visita_usuario = visitas.visita_consulta");
    $this->db->where("visitas.visita_ficha = '$id'");
    return $this->db->get();
  }

  public function imprimirFichasPorFecha($fecha){
    $this->db->SELECT ("ficha_id, usuario_nombre, usuario_apellido, mascota_nombre, especie_nombre, caracter_nombre, usuario_telefono, usuario_email, consulta_nombre, ficha_control");
    $this->db->FROM ("usuarios,mascotas,consultas, fichas, especies, caracteres");
    $this->db->WHERE ("mascota_id=ficha_mascota and mascota_usuario=usuario_id and especie_id=mascota_especie and caracter_id=mascota_caracter and consulta_id=ficha_consulta and (ficha_control between '$fecha 0:0:0' and '$fecha 23:59:59')");
    return $this->db->get();
  }
}
