<?php $attributes = array( 'name' => 'insertca', 'method'=>'post','id'=>'catego', 'role'=>'form', 'class'=>'form-horizontal');
 echo form_open('categorias/addCategoria', $attributes);?>
<h3>Insertar Categoría</h3>
<div class="form-group">
    <label for="categoria" class="col-sm-3 control-label">Categoría</label>
    <div class="col-md-4 col-md-5">
    <?php echo form_input(array( 'name'=>'categoria', 'id'=>'categoria', 'type'=>'text', 'class'=>'form-control')) ?>
     <?php 
        if(isset($this->session->userdata)){
            echo '<span class="text-danger">'.form_error('categoria').'</span>';
        }
     ?>
    </div>    
</div>
<div class="form-group">
    <label for="categoria_en" class="col-sm-3 control-label">Categoría EN</label>
    <div class="col-md-4 col-md-5">
    <?php echo form_input(array( 'name'=>'categoria_en', 'id'=>'categoria_en', 'type'=>'text', 'class'=>'form-control')) ?>
     <?php 
        if(isset($this->session->userdata)){
            echo '<span class="text-danger">'.form_error('categoria_en').'</span>';
        }
     ?>
    </div>    
</div>
<div class="form-group">
    <label for="categoria_en" class="col-sm-3 control-label">Categoría DE</label>
    <div class="col-md-4 col-md-5">
    <?php echo form_input(array( 'name'=>'categoria_de', 'id'=>'categoria_de', 'type'=>'text', 'class'=>'form-control')) ?>
     <?php 
        if(isset($this->session->userdata)){
            echo '<span class="text-danger">'.form_error('categoria_de').'</span>';
        }
     ?>
    </div>    
</div>
<div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <?php echo form_submit(array('class'=>'btn btn-default', 'id'=>'submit','name'=>'submit'),'Insertar');?>
      <a href="<?php echo base_url(); ?>categorias/listar" class="btn btn-default">Volver</a>  
    </div>
  </div>
<?php echo form_close(); ?>