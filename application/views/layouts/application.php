<!-- CABECERA -->
<!DOCTYPE html>
<html lang="es">
    <head>
        <title>CMS - nitsnets</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css"> 
    </head> 
    <body class="container">
        <header>
            <nav class="navbar navbar-default">
                <a class="btn" href="<?php echo base_url(); ?>">CMS</a>
                <span class="pull-right" style="padding-top: 8px;padding-right: 8px;">Hola <strong>Administrador</strong></span>
            </nav>
            <!--<a href="<?php echo base_url(); ?>productos/listar">Productos</a>&nbsp;<a href="<?php echo base_url(); ?>categorias/listar">Categorias</a>&nbsp;<a href="<?php echo base_url(); ?>colores/listar">Colores</a>&nbsp;-->
        </header>
        <ul class="list-inline">
            <li><a class="btn btn-primary active" href="<?php echo base_url(); ?>productos/listar">Productos</a></li>
            <li><a class="btn btn-primary active" href="<?php echo base_url(); ?>categorias/listar">Categorías</a></li>
            <li><a class="btn btn-primary active" href="<?php echo base_url(); ?>colores/listar">Colores</a></li>
        </ul>
        <!-- CONTENIDO VARIABLE -->
        <?php echo $yield; ?>
        
        <!-- PIE -->
        <footer>
            <nav class="navbar navbar-default">
                <a class="btn" href="http://www.Nitsnets.com">Nitsnets</a>
                <span class="pull-right" style="padding-top: 8px;padding-right: 8px;"><strong>&copy; 2014</strong></span>
            </nav>
        </footer>
    </body>
</html>
