<h3>Productos <small><span class="badge"><?php echo count($productos); ?></span></small></h3>
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
<a href="<?php echo base_url(); ?>productos/addProducto" class="pull-right">Insertar Producto</a>
<?php
if (isset($errorProductos)){
        echo '<p class="danger">'.$errorProductos.'</p>';
    }else{
      echo '<table class="table table-hover table-condensed">
                <thead>
                    <td><strong>Id</strong></td>
                    <td><strong>Producto</strong></td>
                    <td><strong>Color</strong></td>
                    <td><strong>Categoria</strong></td>
                    <td><strong>Precio</strong></td>
                    <td></td>
                    <td></td>
                </thead>';
        foreach ($productos as $producto) {
            echo '<tr>
                    <td>'.$producto['id'].'</td>
                    <td>'.$producto['nombre'].'</td>
                    <td>';
            foreach($producto['colores'] as $color){
                echo $color['nombre'] . '</br>';
            }
            echo '</td>    
                    <td>'.$producto['categoria'].'</td>
                    <td>'.number_format($producto['precio'],2).' &euro;</td>
                    <td><span class="lead"><a href="'.base_url().'productos/ver/'.$producto['id'].'"><span class="glyphicon glyphicon-edit"></span></a></span></td>
                    <td><a href="'.base_url().'productos/borrar/'.$producto['id'].'"><span class="glyphicon glyphicon-remove"></span></a></td>
                  </tr>';
        }
        echo '</table>'; 
    }
?>
