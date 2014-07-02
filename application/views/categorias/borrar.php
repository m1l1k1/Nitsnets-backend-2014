<?php $attributes = array( 'name' => 'borrarca', 'method'=>'post','id'=>'catego', 'role'=>'form', 'class'=>'form-horizontal');
 echo form_open('categorias/removeCategoria', $attributes);?>
<!--<table>
    <tr>
        <td>¿Esta seguro de querer borrar la categoría <strong><?php echo $categoria['nombre']; ?></strong>?.
            <?php echo form_input(array( 'name'=>'id_cat', 'id'=>'id_cat', 'type'=>'hidden', 'value'=> $categoria['id'] )) ?></td>
    </tr>
    <tr>
        <td><?php echo form_submit(array('class'=>'button', 'id'=>'submit','name'=>'submit'),'Borrar');?>&nbsp;<a href="<?php echo base_url(); ?>categorias/listar">Cancelar</a></td>
    </tr>
</table>-->
<h3>Borrar Categoría</h3>
    <?php echo form_input(array( 'name'=>'id_cat', 'id'=>'id_cat', 'type'=>'hidden', 'value'=> $categoria['id'] )) ?>
    <p class="bg-info">¿Esta seguro de querer borrar la categoría <strong><?php echo $categoria['nombre']; ?></strong>?.</p>
<div style="padding-bottom: 20px;">
    <?php echo form_submit(array('class'=>'btn btn-default', 'id'=>'submit','name'=>'submit'),'Borrar');?>
    <a href="<?php echo base_url(); ?>categorias/listar" class="btn btn-default">Cancelar</a>
</div>
<?php echo form_close(); ?>