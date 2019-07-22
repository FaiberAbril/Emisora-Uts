<html>
    <head>
        <meta charset="UTF-8">
       <link rel="stylesheet" href="../../<?php base_url(); ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../<?php base_url(); ?>assets/css/styleadministrar.css">
        <link rel="stylesheet" href="../../<?php base_url(); ?>assets/css/bootstrap-theme.min.css">
        <title>UtsRadio</title>
    </head>
    <body>        
         <div class="wrapper1">
              <img id="logoradio" src="../../<?php base_url(); ?>assets/img/logo radio.png"  class="img-responsive" alt="Responsive image">
        </div>                  
            <div class="container">         
                 <ul id="breadcrumb">
                 <li><a href="../../<?php base_url(); ?>administrar/index"><span class="glyphicon glyphicon-home">&nbsp;</span>Inicio</a></li>
                 <li><a href="../../<?php base_url(); ?>administrar/index"><span class="glyphicon glyphicon-cog">&nbsp;</span>Administrar</a></li>
                 <li><a href="../../<?php base_url(); ?>usuario/index"><span class="glyphicon glyphicon-user">&nbsp;</span>Usuario</a></li>
                 <li><a href="#"><span class="glyphicon glyphicon-erase">&nbsp;</span>Editar Usuario</a></li>
                 <li><a href="#"><span class="icon icon-arrow-down"> </span> </a></li>
                </ul>
                
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Modificar Usuario</h4>
                        </div>
                        
                         <div class="modal-body">                         
                            <form class="form-horizontal" method="POST" action="../../<?php base_url()?>usuario/guardar">
                                <div class="form-group">
                                    <label for="inputperfil" class="col-sm-2 control-label">Rol del Usurio</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="perfil" id="pefil" name="perfil">
                                             <option value="<?php echo $data[0]->usu_per_idperfil;  ?>"><?php echo $data[0]->per_descripcion;  ?></option>
                                            <?php foreach ($combo as $item) { ?>
                                                <?php if($data[0]->usu_per_idperfil != $item->per_codperfil ){ ?>
                                                <option value="<?php echo $item->per_codperfil ?>"><?php echo $item->per_descripcion; ?></option>
                                            <?php } ?>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                              
                                <div class="form-group">
                                    
                                    <label for="inputEmail3" class="col-sm-2 control-label">Nombres</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="Nombres" name="nombres" placeholder="nombres" value="<?php echo $data[0]->usu_nombreusuario; ?>">
                                    </div>
                                </div>
                                
                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Apellidos</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="Apellidos" name="apellidos" placeholder="apellidos" value="<?php echo $data[0]->usu_apellido; ?>">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="Password" name="password" placeholder="password" value="<?php echo $data[0]->usu_passwd; ?>">
                                        <input type="hidden" class="form-control" id="codigo" name="codigo" placeholder="codigo" value="<?php echo $data[0]->usu_codusuario; ?>">
                                    </div>
                                </div>
                             
                                 <div class="form-group-sm">
                                      <input type="submit" class="btn btn-primary" value="Guardar" type="submit" />
                                </div>
                            </form>                    
                               
                        </div>
                        
                        
                        
                </div>
            </div>

        </div>
        <script src="../../<?php base_url(); ?>assets/js/jquery.min.js"></script>
        <script src="../../<?php base_url(); ?>assets/js/bootstrap.min.js"></script>
    </body>
</html>

