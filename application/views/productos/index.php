<?php
    if (isset($errorProductos)){
        echo '<p class="danger">'.$errorProductos.'</p>';
    }else{
        echo '<div class="row">
                <div class="col-md-8">';
        if($productos == NULL){
            echo '<p>No existen productos dados de alta.</p>';
        }else{
            echo '<h3>Productos <small><span class="badge">'.count($productos).'</span></small></h3>
                <table class="table table-hover table-condensed">
                      <thead>
                          <td><strong>Id</strong></td>
                          <td><strong>Producto</strong></td>
                          <td><strong>Color</strong></td>
                          <td><strong>Categoria</strong></td>
                          <td><strong>Precio</strong></td>
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
                        </tr>';
              }
              echo '</table>';
              echo '<a class="pull-right" href="'.base_url().'productos/listar">+ Productos</a><div class="clearfix"></div>';
        }
        echo '</div>'; // Cierro el div de la primera columna
        echo '<div class="col-md-3 col-md-offset-1">';
        if($categorias == NULL){
             echo '<p>No existen categorias dadas de alta.</p>';
        }else{
            echo '<h3>Categorías <small><span class="badge">'.count($categorias).'</span></small></h3>
                <table class="table table-hover">
                    <thead>
                        <td><strong>Id</strong></td>
                        <td><strong>Categoría</strong></td>
                    </thead>';
            for($i=0;$i < 5; $i++){
                $categoria = $categorias[$i];
                echo '<tr>
                        <td>'.$categoria['id'].'</td>
                        <td>'.$categoria['nombre'].'</td>
                      </tr>';
            }
            echo '</table>';
            echo '<a class="pull-right" href="'.base_url().'categorias/listar">+ Categorías</a><div class="clearfix"></div>';
        }
        if($colores == NULL){
            echo '<p>No existen colores dados de alta.</p>';
        }else{
            echo '<h3>Colores <small><span class="badge">'.count($colores).'</span></small></h3>
                <table class="table table-hover">
                    <thead>
                        <td><strong>Id</strong></td>
                        <td><strong>Color</strong></td>
                    </thead>';
            for($i=0;$i < 5; $i++){
                $color = $colores[$i];
                echo '<tr>
                        <td>'.$color['id'].'</td>
                        <td>'.$color['nombre'].'</td>
                      </tr>';
            }
            echo '</table>';
            echo '<a class="pull-right" href="'.base_url().'colores/listar">+ Colores</a><div class="clearfix"></div>';
        }
        echo '</div></div>'; // Cierro el div de la columna y el de la fila.
    }
?>
