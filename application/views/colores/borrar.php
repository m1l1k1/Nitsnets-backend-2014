<?php $attributes = array( 'name' => 'borrarco', 'method'=>'post','id'=>'colo', 'role'=>'form', 'class'=>'form-horizontal');
 echo form_open('colores/removeColor', $attributes);?>
<!--<table>
    <tr>
        <td>¿Esta seguro de querer borrar el color <strong><?php echo $color['nombre']; ?></strong>?.
            <?php echo form_input(array( 'name'=>'id_col', 'id'=>'id_col', 'type'=>'hidden', 'value'=> $color['id'] )) ?></td>
    </tr>
    <tr>
        <td><?php echo form_submit(array('class'=>'button', 'id'=>'submit','name'=>'submit'),'Borrar');?>&nbsp;<a href="<?php echo base_url(); ?>colores/listar">Cancelar</a></td>
    </tr>
</table>-->
<h3>Borrar Color</h3>
    <?php echo form_input(array( 'name'=>'id_col', 'id'=>'id_col', 'type'=>'hidden', 'value'=> $color['id'] )) ?>
    <p class="bg-info">¿Esta seguro de querer borrar el color <strong><?php echo $color['nombre']; ?></strong>?.</p>
<div style="padding-bottom: 20px;">
    <?php echo form_submit(array('class'=>'btn btn-default', 'id'=>'submit','name'=>'submit'),'Borrar');?>
    <a href="<?php echo base_url(); ?>colores/listar" class="btn btn-default">Cancelar</a>
</div>            
            
<?php echo form_close(); ?>