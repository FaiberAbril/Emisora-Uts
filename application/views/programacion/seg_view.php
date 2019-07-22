<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../<?php base_url(); ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../<?php base_url(); ?>assets/css/styleadministrar.css">
        <link rel="stylesheet" href="../<?php base_url(); ?>assets/css/bootstrap-theme.min.css">
        <title>Usuario</title>
    </head>
    <body>      
        <div class="wrapper1">
            <img id="logoradio" src="../<?php base_url(); ?>assets/img/logo radio.png"  class="img-responsive" alt="Responsive image">
        </div>           
        <div class="wrapper"> 
            <div class="container">         
                <ul id="breadcrumb">
                    <li><a href="../<?php base_url(); ?>administrar/index"><span class="glyphicon glyphicon-home">&nbsp;</span>Inicio</a></li>
                    <li><a href="../<?php base_url(); ?>administrar/index"><span class="glyphicon glyphicon-cog">&nbsp;</span>Administrar</a></li>
                    <li><a href="../<?php base_url(); ?>programacion/index"><span class="glyphicon glyphicon-th">&nbsp;</span>Parrilla de programación</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-th">&nbsp;</span>Segmentodo de Parrilla de programación</a></li>
                    <li><a href="#"><span class="icon icon-arrow-down"> </span> </a></li>
                </ul>            
                <div></div> 

                <div class="container panel panel-default">
                    <h2 style="text-align:center">Segmentos de programación</h2>
                    <div class="panel-body">
                        <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal" style="width:100% ">
                            <span class="glyphicon glyphicon-star" aria-hidden="true">&nbsp;</span><a style="text-decoration: none;color: black">Crear nuevo segmento</a>
                        </button> 
                    </div>
                </div>         

                <!-- Modal crear -->           
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                <h4 class="modal-title" id="myModalLabel">Crear Segmentos</h4>
                            </div>

                            <div class="modal-body">                         
                                <form class="form-horizontal" method="POST" action="../<?php base_url() ?>programacion/segmento">

                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Nombres segmento</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" >
                                        </div>
                                    </div>

                                 
                                    <div class="form-group-sm">
                                        <button style="margin-left: 10px;"type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                        <input type="submit" class="btn btn-primary" value="Guardar" type="submit" />
                                    </div>
                                </form>                    

                            </div>
                        </div>
                    </div>
                </div>         
                <!--fin modal-->     
                
                
                    <div class="container panel panel-default"> 
                        <h1 style="text-align:center">Listar Segmento de Parrilla de programacion</h1>                         
                    <div class="marcotabla">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Nombre</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($listar as $item) { ?>
                                    <tr>
                                        <td></td> 
                                        <td> <?php echo $item->cat_descripcion ?> </td>                       
                                        <td><?php echo anchor('programacion/deleteseg/' . $item->cat_codcategoria, '<input type="submit" class="btn btn-primary" value="Eliminar" type="submit"/>') ?>
                                            <?php echo anchor('programacion/segActualizar/' . $item->cat_codcategoria, '<input type="submit" class="btn btn-primary" value="Editar" type="submit"/>') ?></td>
                                    <?php } ?>  
                            </tbody>
                        </table>                 
                    </div>
                </div>


                   
    
        <script src="../<?php base_url(); ?>assets/js/jquery.min.js"></script>
        <script src="../<?php base_url(); ?>assets/js/bootstrap.min.js"></script>
    </body>
</html>

