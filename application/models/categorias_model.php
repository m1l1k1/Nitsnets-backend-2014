<?php
Class Categorias_model extends CI_Model{
    /* Funcion que devuelve todas las categorias de la tabla categorias */
    function getCategorias(){
        /*
         * SELECT *
         * FROM colores
         */
        $query = $this->db->select('*');
        $query = $this->db->from('categorias');
        $query = $this->db->get();
        $categorias = array();
        foreach ($query->result_array() as $row){
            $categorias[] = $row;
        }
        return $categorias;
    }
    
    /* Funcion que inserta un color */
    function addCategoria($categoria){
        $this->db->insert('categorias', $categoria);
    }
    
    /* Funcion que actualiza un color */
    function updateCategoria($categoria){
        $this->db->where('id', $categoria['id']);
        $this->db->update('categorias', $categoria);
    }
    
    /* Funcion que borra una categoria */
    function removeCategoria($id){
        $this->db->where('id', $id);
        $this->db->delete('categorias');
    }
    
    /* Funcion que devuelve una categoria por el id */
    function readCategoria($id){
        $query = $this->db->select('*');
        $query = $this->db->from('categorias');
        $query = $this->db->where('id', $id);
        $query = $this->db->get();
        $categoria = array();
        foreach ($query->result_array() as $row){
            $categoria = $row;
        }
        return $categoria;
    }
}
?>
