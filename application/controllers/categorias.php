<?php
Class Categorias extends MY_Controller{
    protected $models = array('categorias');
    public function index(){
        $this->listar();
    }
    /* Funcion que muestra el listado de las categorias */
    public function listar(){
        try{
            $this->data['categorias'] = $this->categorias->getCategorias();
            if($this->data['categorias'] === NULL){
                throw new Exception('Se ha producido un error con la base de datos, disculpe las molestias');
            }
            $this->view = 'categorias/listar';
        } catch (Exception $e){
            show_error($e->getMessage());
        }
    }
    /* Funcion que traduce los mensajes de error */
    public function traducirMensajes(){
        $this->form_validation->set_message('required','Campo obligatorio');
    }
    /* Funcion que carga el formulario para añadir una categoria y lo añade a la BD */
    public function addCategoria(){
        try{
            $this->load->library('form_validation');
            $this->traducirMensajes();
            $this->form_validation->set_rules('categoria', 'Categoria', 'trim|required|xss_clean');
            $this->form_validation->set_rules('categoria_en', 'Categoria EN', 'trim|required|xss_clean');
            $this->form_validation->set_rules('categoria_de', 'Categoria DE', 'trim|required|xss_clean');
            if ($this->form_validation->run() === TRUE){
                $categoria = array();
                $categoria['nombre'] = $this->input->post('categoria');
                $categoria['nombre_en'] = $this->input->post('categoria_en');
                $categoria['nombre_de'] = $this->input->post('categoria_de');
                $this->categorias->addCategoria($categoria);
                $this->load->view('categorias/listar');
                $this->session->set_flashdata('insert_ok','Categoría creada correctamente.');
                redirect('categorias/listar', 'refresh');
            }else{
            }
        }  catch (Exception $e){
            show_error('Se ha producido un error con la base de datos, disculpe las molestias');
        }
    }
    /* Funcion que recoje el id de categoria y muestra el formulario para actualizar la categoria */
    public function ver(){
         try{
            if ($this->uri->segment(3) === FALSE){
                throw new Exception('No se ha especificado la id de ninguna categoria');
            }    
            $id = $this->uri->segment(3); //Recojo el id de la URL
            $this->data['categoria'] = $this->categorias->readCategoria($id);
        }  catch (Exception $e){
            show_error($e->getMessage());
        }
    }
    /* Funcion que actualiza una categoria */
    public function updateCategoria(){
        try{
            if($this->input->post('submit')){
                $categoria = array();
                $categoria['id'] = $this->input->post('id_cat');
                $categoria['nombre'] = $this->input->post('categoria');
                $categoria['nombre_en'] = $this->input->post('categoria_en');
                $categoria['nombre_de'] = $this->input->post('categoria_de');
                $this->categorias->updateCategoria($categoria);
                $this->session->set_flashdata('update_ok','Categoría actualizada correctamente.');
                $this->load->view('categorias/listar');
                redirect('categorias/listar', 'refresh');
            }
        }  catch (Exception $e){
            show_error('Se ha producido un error con la base de datos, disculpe las molestias');
        }
    }
    /* Funcion que muestra la vista para borrar una categoria */
    public function borrar(){
        try{
            if ($this->uri->segment(3) === FALSE){
                throw new Exception('No se ha especificado la id de ninguna categoria');
            }    
            $id = $this->uri->segment(3); //Recojo el id de la URL
            $this->data['categoria'] = $this->categorias->readCategoria($id);
        }  catch (Exception $e){
            show_error($e->getMessage());
        }
    }
    /* Funcion que borra una categoria */
    public function removeCategoria(){
        try{
            if($this->input->post('submit')){
                $id = $this->input->post('id_cat');
                $this->categorias->removeCategoria($id);
                $this->session->set_flashdata('remove_ok','Categoría borrada correctamente.');
                $this->load->view('categorias/listar');
                redirect('categorias/listar', 'refresh');
            }
        }  catch (Exception $e){
            show_error('Se ha producido un error con la base de datos, disculpe las molestias');
        }
    }
}
?>
