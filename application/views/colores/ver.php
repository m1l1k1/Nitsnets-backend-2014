<?php $attributes = array( 'name' => 'insertco', 'method'=>'post','id'=>'colo', 'role'=>'form', 'class'=>'form-horizontal');
 echo form_open('colores/updateColor', $attributes);?>
<!--<table>
    <tr>
        <td><?php echo form_label('Color', 'color') ?></td>
        <td><?php echo form_input(array( 'name'=>'color', 'id'=>'color', 'type'=>'text', 'value'=> $color['nombre'] )) ?>
        <td><?php echo form_input(array( 'name'=>'id_col', 'id'=>'id_col', 'type'=>'hidden', 'value'=> $color['id'] )) ?>
        </td>
    </tr>
    <tr>
        <td></td>
        <td><?php echo form_submit(array('class'=>'button', 'id'=>'submit','name'=>'submit'),'Actualizar');?></td>
    </tr>
</table>-->
<h3>Actualizar Color</h3>
<div class="form-group">
    <label for="color" class="col-sm-3 control-label">Color</label>
    <div class="col-md-4 col-md-5">
    <?php echo form_input(array( 'name'=>'color', 'id'=>'color', 'type'=>'text', 'class'=>'form-control', 'value'=> $color['nombre'])) ?>
        <?php echo form_input(array( 'name'=>'id_col', 'id'=>'id_col', 'type'=>'hidden', 'value'=> $color['id'] )) ?>
    </div>    
</div>
<div class="form-group">
    <label for="color_en" class="col-sm-3 control-label">Color EN</label>
    <div class="col-md-4 col-md-5">
    <?php echo form_input(array( 'name'=>'color_en', 'id'=>'color_en', 'type'=>'text', 'class'=>'form-control', 'value'=> $color['nombre_en'])) ?>
    </div>    
</div>
<div class="form-group">
    <label for="color_de" class="col-sm-3 control-label">Color DE</label>
    <div class="col-md-4 col-md-5">
    <?php echo form_input(array( 'name'=>'color_de', 'id'=>'color_de', 'type'=>'text', 'class'=>'form-control', 'value'=> $color['nombre_de'])) ?>
    </div>    
</div>
<div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <?php echo form_submit(array('class'=>'btn btn-default', 'id'=>'submit','name'=>'submit'),'Actualizar');?>
      <a href="<?php echo base_url(); ?>colores/listar" class="btn btn-default">Volver</a>
    </div>
  </div>
<?php echo form_close(); ?>