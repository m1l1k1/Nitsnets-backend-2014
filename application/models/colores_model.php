<?php
Class Colores_model extends CI_Model{
    /* Funcion que obtiene los colores de un producto  */
    function getColoresProducto($id){
        /* 
         * SELECT co.nombre 
         * FROM colores co, productos_colores pc
         * WHERE pc.fk_colores = co.id AND pc.fk_productos = 1
         */
        $query = $this->db->select('co.id, co.nombre');
        $query = $this->db->from('colores co, productos_colores pc');
        $query = $this->db->where('pc.fk_colores = co.id');
        $query = $this->db->where('pc.fk_productos', $id);
        $query = $this->db->get();
        $colores = array();
        foreach ( $query->result_array() as $row){
            $colores[] = $row;
        }
        return $colores;
    }
    /* Funcion que devuelve todos los datos de la tabla colores */
    function getColores(){
        /*
         * SELECT *
         * FROM colores
         */
        $query = $this->db->select('*');
        $query = $this->db->from('colores');
        $query = $this->db->get();
        $colores = array();
        foreach ($query->result_array() as $row){
            $colores[] = $row;
        }
        return $colores;
    }
    
    /* Funcion que inserta un color */
    function addColor($color){
        $this->db->insert('colores', $color);
    }
    
    /* Funcion que actualiza un color */
    function updateColor($color){
        $this->db->where('id', $color['id']);
        $this->db->update('colores', $color);
    }
    
    /* Funcion que borra un color */
    function removeColor($id){
        $this->db->where('id',$id);
        $this->db->delete('colores');
    }
    
    function readColor($id){
        $query = $this->db->select('*');
        $query = $this->db->from('colores');
        $query = $this->db->where('id', $id);
        $query = $this->db->get();
        $color = array();
        foreach ($query->result_array() as $row){
            $color = $row;
        }
        return $color;
    }
}
?>
