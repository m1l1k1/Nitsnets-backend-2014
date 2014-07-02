<?php
Class Productos extends MY_Controller{
    protected $models = array('productos', 'colores', 'categorias');
    /* Funcion que carga la vista principal del backend */
    public function index(){
        try{
            $productos = $this->productos->getProductos();
            $colores = $this->colores->getColores();
            $categorias = $this->categorias->getCategorias();
            if($productos == NULL){
                throw new Exception('No hay productos disponibles en la base de datos');
            }
            $this->data['productos'] = $productos; 
            $this->data['colores'] = $colores;
            $this->data['categorias'] = $categorias;
        }  catch (Exception $e){
            $this->data['errorProductos'] = $e->getMessage();
        }
    }
    /* Funcion que carga la vista con la lista de todos los productos */
    public function listar(){
        try{
            $productos = $this->productos->getProductos();
            if($productos == NULL){
                throw new Exception('No hay productos disponibles en la base de datos');
            }
            $this->data['productos'] = $productos; 
            
        }  catch (Exception $e){
            $this->data['errorProductos'] = $e->getMessage();
        }
    }
    
    public function traducirMensajes(){
        $this->form_validation->set_message('required','Campo obligatorio');
    }
    /* Funcion que carga la vista para añadir un producto y lo añade a la BD */
    public function addProducto(){
        try{
            $this->load->library('form_validation');
            $this->traducirMensajes();
            $this->form_validation->set_rules('producto', 'Producto', 'trim|required|xss_clean');
            $this->form_validation->set_rules('producto_en', 'Producto EN', 'trim|required|xss_clean');
            $this->form_validation->set_rules('producto_de', 'Producto DE', 'trim|required|xss_clean');
            $this->form_validation->set_rules('descripcion', 'Descripción', 'trim|required|xss_clean');
            $this->form_validation->set_rules('descripcion_en', 'Descripción EN', 'trim|required|xss_clean');
            $this->form_validation->set_rules('descripcion_de', 'Descripción DE', 'trim|required|xss_clean');
            $this->form_validation->set_rules('precio', 'Precio', 'trim|required|xss_clean');
            $this->form_validation->set_rules('colores[]', 'Colores', 'required');
            if ($this->form_validation->run() === TRUE){
                $producto = array();
                $producto['nombre'] = $this->input->post('producto');
                $producto['nombre_en'] = $this->input->post('producto_en');
                $producto['nombre_de'] = $this->input->post('producto_de');
                $producto['descripcion'] = $this->input->post('descripcion');
                $producto['descripcion_en'] = $this->input->post('descripcion_en');
                $producto['descripcion_de'] = $this->input->post('descripcion_de');
                $producto['precio'] = (float)$this->input->post('precio');
                $producto['fk_categorias'] = $this->input->post('categoria');
                $colores = array();
                $colores = $this->input->post('colores');
                $this->productos->addProducto($producto, $colores);
                $this->session->set_flashdata('insert_ok','Producto creado correctamente.');
                $this->load->view('productos/listar');
                redirect('productos/listar', 'refresh');
            }else{
                $this->data['categorias'] = $this->categorias->getCategorias();
                $this->data['colores'] = $this->colores->getColores();
            }
        }  catch (Exception $e){
            show_error('Se ha producido un error con la base de datos, disculpe las molestias');
        }
    }
    /* Funcion que carga la vista de edicion de un producto */
    public function ver(){
        try{
            if ($this->uri->segment(3) === FALSE){
                throw new Exception('No se ha especificado la id de ningun producto');
            }    
            $id = $this->uri->segment(3); //Recojo el id de la URL
            $this->data['producto'] = $this->productos->readProducto($id);
            $this->data['categorias'] = $this->categorias->getCategorias();
            $this->data['colores'] = $this->colores->getColores();
        }  catch (Exception $e){
            show_error($e->getMessage());
        }
    }
    /* Funcion que actualiza un producto */
    public function updateProducto(){
        try{
            if($this->input->post('submit')){
                $producto = array();
                $producto['id'] = $this->input->post('id_pro');
                $producto['nombre'] = $this->input->post('producto');
                $producto['nombre_en'] = $this->input->post('producto_en');
                $producto['nombre_de'] = $this->input->post('producto_de');
                $producto['descripcion'] = $this->input->post('descripcion');
                $producto['descripcion_en'] = $this->input->post('descripcion_en');
                $producto['descripcion_de'] = $this->input->post('descripcion_de');
                $producto['precio'] = (float)$this->input->post('precio');
                $producto['fk_categorias'] = $this->input->post('categoria');
                $colores = array();
                $colores = $this->input->post('colores');
                $this->productos->updateProducto($producto, $colores);
                $this->session->set_flashdata('update_ok','Producto actualizado correctamente.');
                $this->load->view('productos/listar');
                redirect('productos/listar', 'refresh');
            }
        }  catch (Exception $e){
            show_error('Se ha producido un error con la base de datos, disculpe las molestias');
        }
    }
    /* funcion que carga la vista para borrar un producto */
    public function borrar(){
        try{
            if ($this->uri->segment(3) === FALSE){
                throw new Exception('No se ha especificado la id de ningun producto');
            }    
            $id = $this->uri->segment(3); //Recojo el id de la URL
            $this->data['producto'] = $this->productos->readProducto($id);
        }  catch (Exception $e){
            show_error($e->getMessage());
        }
    }
    /* Funcion que borra un producto de la BD */
    public function removeProducto(){
        try{
            if($this->input->post('submit')){
                $id = $this->input->post('id_pro');
                $this->productos->removeProducto($id);
                $this->session->set_flashdata('remove_ok','Producto borrado correctamente.');
                $this->load->view('productos/listar');
                redirect('productos/listar', 'refresh');
            }
        }  catch (Exception $e){
            show_error('Se ha producido un error con la base de datos, disculpe las molestias');
        }
    }
}
?>
