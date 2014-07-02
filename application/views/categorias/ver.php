<?php $attributes = array( 'name' => 'insertca', 'method'=>'post','id'=>'catego', 'role'=>'form', 'class'=>'form-horizontal');
 echo form_open('categorias/updateCategoria', $attributes);?>
<!--<table>
    <tr>
        <td><?php echo form_label('Categoria', 'categoria') ?></td>
        <td><?php echo form_input(array( 'name'=>'categoria', 'id'=>'categoria', 'type'=>'text', 'value'=> $categoria['nombre'] )) ?>
        <td><?php echo form_input(array( 'name'=>'id_cat', 'id'=>'id_cat', 'type'=>'hidden', 'value'=> $categoria['id'] )) ?>
        </td>
    </tr>
    <tr>
        <td></td>
        <td><?php echo form_submit(array('class'=>'button', 'id'=>'submit','name'=>'submit'),'Actualizar');?></td>
    </tr>
</table>-->
<h3>Actualizar Categoría</h3>
<div class="form-group">
    <label for="categoria" class="col-sm-3 control-label">Categoría</label>
    <div class="col-md-4 col-md-5">
    <?php echo form_input(array( 'name'=>'categoria', 'id'=>'categoria', 'type'=>'text', 'class'=>'form-control', 'value'=> $categoria['nombre'])) ?>
        <?php echo form_input(array( 'name'=>'id_cat', 'id'=>'id_cat', 'type'=>'hidden', 'value'=> $categoria['id'] )) ?>
    </div>    
</div>
<div class="form-group">
    <label for="categoria_en" class="col-sm-3 control-label">Categoría EN</label>
    <div class="col-md-4 col-md-5">
    <?php echo form_input(array( 'name'=>'categoria_en', 'id'=>'categoria_en', 'type'=>'text', 'class'=>'form-control', 'value'=> $categoria['nombre_en'])) ?>
    </div>    
</div>
<div class="form-group">
    <label for="categoria_de" class="col-sm-3 control-label">Categoría DE</label>
    <div class="col-md-4 col-md-5">
    <?php echo form_input(array( 'name'=>'categoria_de', 'id'=>'categoria_de', 'type'=>'text', 'class'=>'form-control', 'value'=> $categoria['nombre_de'])) ?>
    </div>    
</div>
<div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <?php echo form_submit(array('class'=>'btn btn-default', 'id'=>'submit','name'=>'submit'),'Actualizar');?>
      <a href="<?php echo base_url(); ?>categorias/listar" class="btn btn-default">Volver</a>
    </div>
  </div>
<?php echo form_close(); ?>