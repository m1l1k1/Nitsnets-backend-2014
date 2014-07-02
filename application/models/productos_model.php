<?php
Class Productos_model extends CI_Model{
    /* Metodo que obtiene toda la informacion de los productos */
    function getProductos(){
        /*
         * SELECT p.id, p.nombre, p.descripcion, p.precio, ca.nombre as categoria
         * FROM productos p, categorias ca
         * WHERE p.fk_categorias = ca.id
         */
        $query = $this->db->select('p.id, p.nombre, p.nombre_en, p.nombre_de, p.descripcion, p.descripcion_en, p.descripcion_de, p.precio, ca.nombre as categoria');
        $query = $this->db->from('productos p, categorias ca');
        $query = $this->db->where('p.fk_categorias = ca.id');
        $query = $this->db->get();
        $this->load->model('Colores_model');
        $productos = array();
        foreach ($query->result_array() as $row){
            $row['colores'] = $this->Colores_model->getColoresProducto($row['id']);
            $productos[] = $row;
        }
        
        return $productos;
    }
    
    /* Funcion que inserta un producto y sus respectivos colores */
    function addProducto($producto, $colores){
        $this->db->insert('productos', $producto);
        $fk_productos = $this->db->insert_id(); //Obtengo el id del producto insertado
        for($i = 0; $i < count($colores); $i++){
            $producto_color = array('fk_productos' => $fk_productos,
                                    'fk_colores' => $colores[$i]);
            $this->db->insert('productos_colores', $producto_color);
        }
    }
    
    /* Funcion que borra un producto */
    function removeProducto($id){
        $this->db->where('id', $id);
        $this->db->delete('productos');
    }
    
    /* Funcion que actualiza los datos de un producto */
    function updateProducto($producto, $colores){
        $this->db->where('id', $producto['id']);
        $this->db->update('productos', $producto);
        $this->removeProCol($producto['id']);
        for($i = 0; $i < count($colores); $i++){
            $pro_colo = array('fk_productos' => $producto['id'],
                              'fk_colores' => $colores[$i]  
            );
            $this->addProCol($pro_colo);
        }
    }
    
    /* Funcion que inserta una linea de productos_colores */
    function addProCol($productos_colores){
        $this->db->insert('productos_colores', $productos_colores);
    }
    
    /* Funcion que borra una linea de productos_colores */
    function removeProCol($productos_colores){
        $this->db->where('fk_productos', $productos_colores);
        //$this->db->where('fk_colores', $productos_colores['fk_colores']);
        $this->db->delete('productos_colores');
    }
    
    function readProducto($id){
        $query = $this->db->select('p.id, p.nombre, p.nombre_en, p.nombre_de, p.descripcion, p.descripcion_en, p.descripcion_de, p.precio, ca.id as categoria');
        $query = $this->db->from('productos p, categorias ca');
        $query = $this->db->where('p.fk_categorias = ca.id');
        $query = $this->db->where('p.id', $id);
        $query = $this->db->get();
        $this->load->model('Colores_model');
        $productos = array();
        foreach ($query->result_array() as $row){
            $row['colores'] = $this->Colores_model->getColoresProducto($id);
            $productos = $row;
        }
        
        return $productos;
    }
}
?>
