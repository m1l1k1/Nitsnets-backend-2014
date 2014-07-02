<h3>Categorías <small><span class="badge"><?php echo count($categorias); ?></span></small></h3>
<?php 
    if ($this->session->flashdata('insert_ok')){
       echo '<div class="alert alert-success alert-dismissable">
                    '.$this->session->flashdata('insert_ok').'
            </div>';
    }
    
    if ($this->session->flashdata('update_ok')){
       echo '<div class="alert alert-success alert-dismissable">
                    '.$this->session->flashdata('update_ok').'
            </div>';
    }
    
    if ($this->session->flashdata('remove_ok')){
       echo '<div class="alert alert-success alert-dismissable">
                    '.$this->session->flashdata('remove_ok').'
            </div>';
    }
 ?>
<a href="<?php echo base_url(); ?>categorias/addCategoria" class="pull-right">Insertar Categoria</a>
<?php
    if($categorias == NULL){
        echo '<p>No existen categorias dadas de alta.</p>';
    }else{
        echo '<table class="table table-hover">
                <thead>
                    <td><strong>Id</strong></td>
                    <td class="text-center"><strong>Categoria</strong></td>
                    <td></td>
                    <td></td>
                </thead>';
        foreach ($categorias as $categoria){
            echo '<tr>
                    <td>'.$categoria['id'].'</td>
                    <td class="text-center">'.$categoria['nombre'].'</td>
                    <td><span class="lead"><a href="'.base_url().'categorias/ver/'.$categoria['id'].'"><span class="glyphicon glyphicon-edit"></span></a></span></td>
                    <td><a href="'.base_url().'categorias/borrar/'.$categoria['id'].'"><span class="glyphicon glyphicon-remove"></span></a></td>
                  </tr>';
        }
        echo '</table>';
    }
?>
