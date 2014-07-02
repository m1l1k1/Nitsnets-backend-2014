<?php $attributes = array( 'name' => 'updatepro', 'method'=>'post','id'=>'produ', 'role'=>'form', 'class'=>'form-horizontal');
 echo form_open('productos/updateProducto', $attributes);?>
<?php 
        $aux = array();
        foreach ($producto['colores'] as $row){
            array_push($aux, $row['id']);
        }
?>
<h3>Actualizar Producto</h3>
<div class="form-group">
    <label for="producto" class="col-sm-3 control-label">Producto</label>
    <div class="col-md-4 col-md-5">
    <?php echo form_input(array( 'name'=>'producto', 'id'=>'producto', 'type'=>'text', 'class'=>'form-control', 'value'=>$producto['nombre'])) ?>
    <?php echo form_input(array( 'name'=>'id_pro', 'id'=>'id_pro', 'type'=>'hidden', 'value'=>$producto['id'])) ?>    
    </div>    
</div>
<div class="form-group">
    <label for="producto_en" class="col-sm-3 control-label">Producto EN</label>
    <div class="col-md-4 col-md-5">
    <?php echo form_input(array( 'name'=>'producto_en', 'id'=>'producto_en', 'type'=>'text', 'class'=>'form-control', 'value'=>$producto['nombre_en'])) ?>    
    </div>    
</div>
<div class="form-group">
    <label for="producto_de" class="col-sm-3 control-label">Producto DE</label>
    <div class="col-md-4 col-md-5">
    <?php echo form_input(array( 'name'=>'producto_de', 'id'=>'producto_de', 'type'=>'text', 'class'=>'form-control', 'value'=>$producto['nombre_de'])) ?>    
    </div>    
</div>
<div class="form-group">
    <label for="descripcion" class="col-sm-3 control-label">Descripción</label>
    <div class="col-md-4 col-md-5">
    <?php echo form_textarea(array( 'name'=>'descripcion', 'id'=>'descripcion', 'class'=>'form-control', 'value'=>$producto['descripcion'])) ?>
    </div>    
</div>
<div class="form-group">
    <label for="descripcion_en" class="col-sm-3 control-label">Descripción EN</label>
    <div class="col-md-4 col-md-5">
    <?php echo form_textarea(array( 'name'=>'descripcion_en', 'id'=>'descripcion_en', 'class'=>'form-control', 'value'=>$producto['descripcion_en'])) ?>
    </div>    
</div>
<div class="form-group">
    <label for="descripcion_de" class="col-sm-3 control-label">Descripción DE</label>
    <div class="col-md-4 col-md-5">
    <?php echo form_textarea(array( 'name'=>'descripcion_de', 'id'=>'descripcion_de', 'class'=>'form-control', 'value'=>$producto['descripcion_de'])) ?>
    </div>    
</div>
<div class="form-group">
    <label for="precio" class="col-sm-3 control-label">Precio</label>
    <div class="col-md-4 col-md-5">
    <?php echo form_input(array( 'name'=>'precio', 'id'=>'precio', 'type'=>'text', 'class'=>'form-control', 'value'=>$producto['precio'])) ?>
    </div>    
</div>
<div class="form-group">
    <label for="categoria" class="col-sm-3 control-label">Categoría</label>
    <div class="col-md-4 col-md-5">
        <select name="categoria" id="categoria" class="form-control">
        <?php 
            foreach($categorias as $categoria){
                if($categoria['id'] == $producto['categoria']){
                    echo '<option value="'.$categoria['id'].'" selected>'.$categoria['nombre'].'</option>';
                }else{
                    echo '<option value="'.$categoria['id'].'">'.$categoria['nombre'].'</option>';
                } 
            } ?>
        </select>
    </div>    
</div>
<div class="form-group">
    <label for="colores" class="col-sm-3 control-label">Colores</label>
    <div class="col-md-4 col-md-5">
        <select name="colores[]" id="colores" class="form-control" multiple>
        <?php 
            foreach($colores as $color){
                if(in_array($color['id'], $aux)){
                    echo '<option value="'.$color['id'].'" selected>'.$color['nombre'].'</option>';
                }else{
                    echo '<option value="'.$color['id'].'">'.$color['nombre'].'</option>';
                }
            } ?>
        </select>
    </div>    
</div>
<div class="form-group">
    <div class="col-sm-offset-3 col-sm-9">
      <?php echo form_submit(array('class'=>'btn btn-default', 'id'=>'submit','name'=>'submit'),'Actualizar');?>
      <a href="<?php echo base_url(); ?>productos/listar" class="btn btn-default">Volver</a>  
    </div>
</div>   
<?php echo form_close(); ?>