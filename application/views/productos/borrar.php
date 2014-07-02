<?php $attributes = array( 'name' => 'borrarpro', 'method'=>'post','id'=>'produ', 'role'=>'form', 'class'=>'form-horizontal');
 echo form_open('productos/removeProducto', $attributes);?>
<!--<table>
    <tr>
        <td>¿Esta seguro de querer borrar el color <strong><?php echo $producto['nombre']; ?></strong>?.
            <?php echo form_input(array( 'name'=>'id_pro', 'id'=>'id_pro', 'type'=>'hidden', 'value'=> $producto['id'] )) ?></td>
    </tr>
    <tr>
        <td><?php echo form_submit(array('class'=>'button', 'id'=>'submit','name'=>'submit'),'Borrar');?>&nbsp;<a href="<?php echo base_url(); ?>productos/listar">Cancelar</a></td>
    </tr>
</table>-->
<h3>Borrar Producto</h3>
    <?php echo form_input(array( 'name'=>'id_pro', 'id'=>'id_pro', 'type'=>'hidden', 'value'=> $producto['id'] )) ?>
    <p class="bg-info">¿Esta seguro de querer borrar el producto <strong><?php echo $producto['nombre']; ?></strong>?.</p>
<div style="padding-bottom: 20px;">
    <?php echo form_submit(array('class'=>'btn btn-default', 'id'=>'submit','name'=>'submit'),'Borrar');?>
    <a href="<?php echo base_url(); ?>productos/listar" class="btn btn-default">Cancelar</a>
</div>            
<?php echo form_close(); ?>