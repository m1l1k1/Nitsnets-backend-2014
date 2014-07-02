<h3>Colores <small><span class="badge"><?php echo count($colores); ?></span></small></h3>
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
<a href="<?php echo base_url(); ?>colores/addColor" class="pull-right">Insertar Color</a>
<?php
    if($colores == NULL){
        echo '<p>No existen colores dados de alta.</p>';
    }else{
        echo '<table class="table table-hover">
                <thead>
                    <td><strong>Id</strong></td>
                    <td class="text-center"><strong>Color</strong></td>
                    <td></td>
                    <td></td>
                </thead>';
        foreach ($colores as $color){
            echo '<tr>
                    <td>'.$color['id'].'</td>
                    <td class="text-center">'.$color['nombre'].'</td>
                    <td><span class="lead"><a href="'.base_url().'colores/ver/'.$color['id'].'"><span class="glyphicon glyphicon-edit"></span></a></span></td>
                    <td><a href="'.base_url().'colores/borrar/'.$color['id'].'"><span class="glyphicon glyphicon-remove"></span></a></td>
                  </tr>';
        }
        echo '</table>';
    }
?>
