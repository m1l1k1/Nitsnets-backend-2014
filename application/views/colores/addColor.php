<?php $attributes = array( 'name' => 'insertco', 'method'=>'post','id'=>'colo', 'role'=>'form', 'class'=>'form-horizontal');
 echo form_open('colores/addColor', $attributes);?>
<!--<table>
    <tr>
        <td><?php echo form_label('Color', 'color') ?></td>
        <td><?php echo form_input(array( 'name'=>'color', 'id'=>'color', 'type'=>'text')) ?>
        </td>
    </tr>
    <tr>
        <td></td>
        <td><?php echo form_submit(array('class'=>'button', 'id'=>'submit','name'=>'submit'),'Insertar');?></td>
    </tr>
</table>-->
<h3>Insertar Color</h3>
<div class="form-group">
    <label for="color" class="col-sm-3 control-label">Color</label>
    <div class="col-md-4 col-md-5">
    <?php echo form_input(array( 'name'=>'color', 'id'=>'color', 'type'=>'text', 'class'=>'form-control')) ?>
    <?php 
        if(isset($this->session->userdata)){
            echo '<span class="text-danger">'.form_error('color').'</span>';
        }
     ?>    
    </div>    
</div>
<div class="form-group">
    <label for="color_en" class="col-sm-3 control-label">Color EN</label>
    <div class="col-md-4 col-md-5">
    <?php echo form_input(array( 'name'=>'color_en', 'id'=>'color_en', 'type'=>'text', 'class'=>'form-control')) ?>
    <?php 
        if(isset($this->session->userdata)){
            echo '<span class="text-danger">'.form_error('color_en').'</span>';
        }
     ?>    
    </div>    
</div>
<div class="form-group">
    <label for="color_de" class="col-sm-3 control-label">Color DE</label>
    <div class="col-md-4 col-md-5">
    <?php echo form_input(array( 'name'=>'color_de', 'id'=>'color_de', 'type'=>'text', 'class'=>'form-control')) ?>
    <?php 
        if(isset($this->session->userdata)){
            echo '<span class="text-danger">'.form_error('color_de').'</span>';
        }
     ?>    
    </div>    
</div>
<div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <?php echo form_submit(array('class'=>'btn btn-default', 'id'=>'submit','name'=>'submit'),'Insertar');?>
      <a href="<?php echo base_url(); ?>colores/listar" class="btn btn-default">Volver</a>  
    </div>
  </div>
<?php echo form_close(); ?>