<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../../<?php base_url(); ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../<?php base_url(); ?>assets/css/styleadministrar.css">
        <link rel="stylesheet" href="../../<?php base_url(); ?>assets/css/bootstrap-theme.min.css">
        <title>Usuario</title>
    </head>
    <body>      
        <div class="wrapper1">
            <img id="logoradio" src="../../<?php base_url(); ?>assets/img/logo radio.png"  class="img-responsive" alt="Responsive image">
        </div>           
        <div class="wrapper"> 
            <div class="container">         
                <ul id="breadcrumb">
                    <li><a href="../../<?php base_url(); ?>administrar/index"><span class="glyphicon glyphicon-home">&nbsp;</span>Inicio</a></li>
                    <li><a href="../../<?php base_url(); ?>administrar/index"><span class="glyphicon glyphicon-cog">&nbsp;</span>Administrar</a></li>
                    <li><a href="../../<?php base_url(); ?>programacion/index"><span class="glyphicon glyphicon-th">&nbsp;</span>Parrilla de programación</a></li>
                    <li><a  href="../../<?php base_url(); ?>programacion/admin"><span class="glyphicon glyphicon-th">&nbsp;</span>Segmentodo de Parrilla</a></li>
                     <li><a  href="#"><span class="glyphicon glyphicon-th">&nbsp;</span> Actualizar Segmentodo</a></li>
                    <li><a href="#"><span class="icon icon-arrow-down"> </span> </a></li>
                </ul>            
                <div></div> 

             
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Actualizar Segmentodo</h4>
                        </div>
                        
                         <div class="modal-body">                         
                             <form class="form-horizontal" method="POST" action="../<?php base_url() ?>programacion/actualizar">

                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Nombres segmento</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="nombre" name="nombre"  value="<?php echo $data[0]->cat_descripcion;  ?>">
                                            <input type="hidden" class="form-control" id="codigo" name="codigo"  value="<?php echo $data[0]->cat_codcategoria;  ?>">
                                        </div>
                                    </div>

                                 
                                    <div class="form-group-sm">
                                  <input type="submit" class="btn btn-primary" value="Actualizar" type="submit" />
                                    </div>
                                </form>                    

                            </div>
                        
                        
                        
                </div>
            </div> 
                
                

                   
    
        <script src="../<?php base_url(); ?>assets/js/jquery.min.js"></script>
        <script src="../<?php base_url(); ?>assets/js/bootstrap.min.js"></script>
    </body>
</html>

