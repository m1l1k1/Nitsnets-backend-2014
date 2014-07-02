<?php
Class Colores extends MY_Controller{
    protected $models = array('colores');
    public function index(){
        $this->listar();
    }
    /* Funcion que carga la vista con la lista de todos los colores */
    public function listar(){
        try{
            $this->data['colores'] = $this->colores->getColores();
            if($this->data['colores'] === NULL){
                throw new Exception('Se ha producido un error con la base de datos, disculpe las molestias');
            }
            $this->view = 'colores/listar';
        } catch (Exception $e){
            show_error($e->getMessage());
        }
    }
    
    public function traducirMensajes(){
        $this->form_validation->set_message('required','Campo obligatorio');
    }
    /* Funcion que carga la vista para añadir un color y lo añade a la BD */
    public function addColor(){
        try{
            $this->load->library('form_validation');
            $this->traducirMensajes();
            $this->form_validation->set_rules('color', 'Color', 'trim|required|xss_clean');
            $this->form_validation->set_rules('color_en', 'Color EN', 'trim|required|xss_clean');
            $this->form_validation->set_rules('color_de', 'Color DE', 'trim|required|xss_clean');
            if ($this->form_validation->run() === TRUE){
                $color = array();
                $color['nombre'] = $this->input->post('color');
                $color['nombre_en'] = $this->input->post('color_en');
                $color['nombre_de'] = $this->input->post('color_de');
                $this->colores->addColor($color);
                $this->load->view('colores/listar');
                $this->session->set_flashdata('insert_ok','Color creado correctamente');
                redirect('colores/listar', 'refresh');
            }else{
            }
        }  catch (Exception $e){
            show_error('Se ha producido un error con la base de datos, disculpe las molestias');
        }
    }
    /* funcion que carga la vista para editar un color */
    public function ver(){
         try{
            if ($this->uri->segment(3) === FALSE){
                throw new Exception('No se ha especificado la id de ningun color');
            }    
            $id = $this->uri->segment(3); //Recojo el id de la URL
            $this->data['color'] = $this->colores->readColor($id);
        }  catch (Exception $e){
            show_error($e->getMessage());
        }
    }
    /* Funcion que acutaliza un color de la BD */
    public function updateColor(){
        try{
            if($this->input->post('submit')){
                $color = array();
                $color['id'] = $this->input->post('id_col');
                $color['nombre'] = $this->input->post('color');
                $color['nombre_en'] = $this->input->post('color_en');
                $color['nombre_de'] = $this->input->post('color_de');
                $this->colores->updateColor($color);
                $this->session->set_flashdata('update_ok','Color actualizado correctamente');
                $this->load->view('colores/listar');
                redirect('colores/listar', 'refresh');
            }
        }  catch (Exception $e){
            show_error('Se ha producido un error con la base de datos, disculpe las molestias');
        }
    }
    /* Funcion que carga la vista para borrar un color */
    public function borrar(){
        try{
            if ($this->uri->segment(3) === FALSE){
                throw new Exception('No se ha especificado la id de ningun color');
            }    
            $id = $this->uri->segment(3); //Recojo el id de la URL
            $this->data['color'] = $this->colores->readColor($id);
        }  catch (Exception $e){
            show_error($e->getMessage());
        }
    }
    /* Funcion que borra un color de la BD */
    public function removeColor(){
        try{
            if($this->input->post('submit')){
                $id = $this->input->post('id_col');
                $this->colores->removeColor($id);
                $this->session->set_flashdata('remove_ok','Color borrado correctamente');
                $this->load->view('colores/listar');
                redirect('colores/listar', 'refresh');
            }
        }  catch (Exception $e){
            show_error('Se ha producido un error con la base de datos, disculpe las molestias');
        }
    }
}
?>