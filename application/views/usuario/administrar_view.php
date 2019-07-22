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
                 <li><a href="#"><span class="glyphicon glyphicon-user">&nbsp;</span>Usuario</a></li>
               </ul>            
            <div></div> 
            
            <div class="container panel panel-default">
                <div class="panel-body">
                <button type="button" class="btn btn-default btn-lg" data-toggle="modal" data-target="#myModal">
                   <span class="glyphicon glyphicon-star" aria-hidden="true">&nbsp;</span>Crear Nuevo Usuario
                </button> 
                </div>
             </div>
                      
            <div class="container panel panel-default"> 
                <h1 style="text-align:center">Lista de Usuarios</h1>
            <div class="marcotabla">
               <table class="table">
                <thead>
                <tr>
                    <td>Perfil</td>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>clave</th>
                     <th>Herramientas</th>
                </tr>
                </thead>
                <tbody>
                 <?php foreach ($registro as $item) { ?>
                    <tr>
                        <td> <?php echo $item->per_descripcion ?> </td>  
                        <td> <?php echo $item->usu_codusuario ?> </td>                       
                        <td> <?php echo $item->usu_nombreusuario?> </td>
                         <td> <?php echo $item->usu_apellido ?> </td>
                         <td> <?php echo $item->usu_passwd ?> </td>
                         <td><?php echo anchor('usuario/delete/' . $item->usu_codusuario ,'<input type="submit" class="btn btn-primary" value="Eliminar" type="submit"/>') ?>
                         <?php echo anchor('usuario/datosActualizar/' . $item->usu_codusuario ,'<input type="submit" class="btn btn-primary" value="Actualizar" type="submit"/>') ?></td>
                <?php } ?>  
                </tbody>
            </table>                 
            </div>
            </div>
     
            
            <!-- Modal crear -->           
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Crear Usuario</h4>
                        </div>
                        
                        <div class="modal-body">                         
                            <form class="form-horizontal" method="POST" action="../<?php base_url()?>usuario/crear">
                                                               
                                <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Nombres</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Nombres">
                                    </div>
                                </div>
                                
                                  <div class="form-group">
                                    <label for="inputEmail3" class="col-sm-2 control-label">Apellidos</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="inputperfil" class="col-sm-2 control-label">Rol del Usurio</label>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="perfil" id="pefil" name="perfil">
                                            <?php foreach ($combo as $item) { ?>
                                                <option value="<?php echo $item->per_codperfil ?>"><?php echo $item->per_descripcion; ?></option>
                                            <?php } ?>
                                        </select>
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
            
        </div>
          </div>
        <script src="../<?php base_url(); ?>assets/js/jquery.min.js"></script>
        <script src="../<?php base_url(); ?>assets/js/bootstrap.min.js"></script>
    </body>
</html>

