<?php

class Mascota extends CI_Model {
    
    /**
     * Metodo que inserta un mascota a la bd
     * Entradas:
     * mascota_usuario
     * mascota_nombre
     * mascota_especie
     * mascota_raza
     * mascota_sexo
     * mascota_fechaNacimiento
     * mascota_color
     * mascota_microchip
     * mascota_foto
     * mascota_caracter
     * mascota_estado
     * mascota_esterilizacion
     * mascota_creacion
     * mascota_actualizacion
     */
    public function insertarMascota($mascota_usuario, $mascota_nombre, $mascota_especie, $mascota_raza, $mascota_sexo, $mascota_fechaNacimiento, $mascota_color, $mascota_microchip, $mascota_foto, $mascota_caracter, $mascota_estado, $mascota_esterilizacion, $mascota_creacion, $mascota_actualizacion){
        $data = array("mascota_usuario"   =>$mascota_usuario,
                    "mascota_nombre"   =>$mascota_nombre,
                    "mascota_especie"   =>$mascota_especie,
                    "mascota_raza"   =>$mascota_raza,
                    "mascota_sexo"   =>$mascota_sexo,
                    "mascota_fechaNacimiento"   =>$mascota_fechaNacimiento,
                    "mascota_color"   =>$mascota_color,
                    "mascota_microchip"   =>$mascota_microchip,
                    "mascota_foto"   =>$mascota_foto,
                    "mascota_caracter"   =>$mascota_caracter,
                    "mascota_estado"   =>$mascota_estado,
                    "mascota_esterilizacion"   =>$mascota_esterilizacion,
                    "mascota_creacion"   =>$mascota_creacion,
                    "mascota_actualizacion"   =>$mascota_actualizacion);      
		return $this->db->insert("mascotas",$data);
    }
    
    /**
     * Metodo que modifica un mascota de la bd
     * Entrada:
     * mascota_id
     * mascota_usuario: elemento a modificar
     * mascota_nombre: elemento a modificar
     * mascota_especie: elemento a modificar
     * mascota_raza: elemento a modificar
     * mascota_sexo: elemento a modificar
     * mascota_fechaNacimiento: elemento a modificar
     * mascota_color: elemento a modificar
     * mascota_microchip: elemento a modificar
     * mascota_foto: elemento a modificar
     * mascota_caracter: elemento a modificar
     * mascota_estado: elemento a modificar
     * mascota_esterilizacion: elemento a modificar
     * mascota_creacion: elemento a modificar
     * mascota_actualizacion: elemento a modificar
     */
    public function editarMascota($mascota_id, $mascota_usuario, $mascota_nombre, $mascota_especie, $mascota_raza, $mascota_sexo, $mascota_fechaNacimiento, $mascota_color, $mascota_microchip, $mascota_foto, $mascota_caracter, $mascota_estado, $mascota_esterilizacion, $mascota_creacion, $mascota_actualizacion){
        $this->db->where("mascota_id", $mascota_id);
		$data = array("mascota_usuario"   =>$mascota_usuario,
                    "mascota_nombre"   =>$mascota_nombre,
                    "mascota_especie"   =>$mascota_especie,
                    "mascota_raza"   =>$mascota_raza,
                    "mascota_sexo"   =>$mascota_sexo,
                    "mascota_fechaNacimiento"   =>$mascota_fechaNacimiento,
                    "mascota_color"   =>$mascota_color,
                    "mascota_microchip"   =>$mascota_microchip,
                    "mascota_foto"   =>$mascota_foto,
                    "mascota_caracter"   =>$mascota_caracter,
                    "mascota_estado"   =>$mascota_estado,
                    "mascota_esterilizacion"   =>$mascota_esterilizacion,
                    "mascota_creacion"   =>$mascota_creacion,
                    "mascota_actualizacion"   =>$mascota_actualizacion);       
		return $this->db->update("mascotas",$data);
	}
    
    /**
     * Metodo que elimina un mascota de la bd
     * Entrada
     * mascota_id
     */
    public function eliminarMascota($mascota_id){
		$this->db->where("mascota_id", $mascota_id);
		return $this->db->delete("mascotas");
    }

    /**
     * Metodo que devuelve todos los mascotas de la bd
     */
	public function mascotas(){
		return $this->db->get("mascotas")->result();
	}
}
