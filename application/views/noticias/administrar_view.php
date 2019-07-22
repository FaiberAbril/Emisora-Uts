<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../<?php base_url(); ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../<?php base_url(); ?>assets/css/styleadministrar.css">
        <link rel="stylesheet" href="../<?php base_url(); ?>assets/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../<?php base_url(); ?>assets/css/timepicki.css" >
         <link href="../<?php base_url(); ?>assets/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
        <script src="../<?php base_url(); ?>assets/js/fileinput.js" type="text/javascript"></script>
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
                    <li><a href="#"><span class="glyphicon glyphicon-th">&nbsp;</span>Noticias</a></li>
                    <li><a href="#"><span class="icon icon-arrow-down"> </span> </a></li>
                </ul>            
                <div></div> 

                <div class="container panel panel-default">
                    <h3 style="text-align:center">Actualizar Noticia</h3>
                    <div class="panel-body">
                        <form  method="post"  enctype="multipart/form-data" action="../<?php base_url() ?>noticias/cargar_archivo">
                         <div class="form-group">
                                <label for="inputperfil" class="col-sm-2 control-label">Tipo Articulo</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="categoria" id="categoria">                                 
                                       
                                          <?php foreach ($combo as $item) { ?>
                                         
                                            <option value="<?php echo $item->cat_codcategoria ?>"><?php echo $item->cat_descripcion; ?></option>
                                        <?php } ?>
                                     </select>
                                </div>
                            </div>
                        
                        
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Titulo de lo Noticias</label>
                                <div class="col-sm-10">
                                  <textarea class="form-control" rows="1" name="titulo" placeholder="Titulo"></textarea>
                                </div>
                            </div>
                        

                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Descripcion de la Noticia</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" rows="3" name="descripcion" placeholder="Descripcion de la Noticia"></textarea>
                                </div>
                            </div>
                            
                              <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Autor </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="timepicker1" name="autor" placeholder="Autor">
                                </div>
                            </div>

                        
                        <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Imagen</label>
                                   <input type="file" id="mi_archivo" name="mi_archivo">
                            </div>
                            
                            
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Crear" type="submit" />
                            </div>

                        </form>

                    </div>
                </div>
                
           
                
                
                
                <div class="container" id="collapseExample3">
                    <div class="well">
                        <h3 style="text-align:center">Detalle Noticias</h3>
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>Titulo</td>
                                    <th>Detalle articulo</th>
                                    <th>Fecha publicacion</th>
                                    <th>autor</th>
                                    <th>Imagen</th>
                                   <th>herramienta</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($listar as $item) { ?>
                                    <tr>
                                        <td> <?php echo $item->art_titulo ?> </td>                       
                                        <td> <?php echo $item->art_descripcion ?> </td>
                                        <td> <?php echo $item->art_fecha ?> </td>      
                                        <td> <?php echo $item->art_autor ?> </td>
                                 
                                        <td> <img width="200" height="200" src="../<?php base_url(); ?>uploads/noticias/<?php echo $item->mul_ruta ?>" alt="imagen"></td>
                                      <td><?php echo anchor('noticias/deletenoticia/' . $item->art_codnoticia , '<input type="submit" class="btn btn-primary" value="Eliminar" type="submit"/>') ?>
                                         
                                    <?php } ?>  
                            </tbody>
                        </table> 
                    </div>
                    
                </div>

            </div>
        </div>
    </div>
    <script src="../<?php base_url(); ?>assets/js/jquery.min.js"></script>
    <script src="../<?php base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="../<?php base_url(); ?>assets/js/javascript.js"></script>
    <script src="../<?php base_url(); ?>assets/js/timepicki.js"></script>


    <script>
        $("#file-3").fileinput({
            showCaption: false,
            browseClass: "btn btn-primary btn-lg",
            fileType: "any"
        });
    </script>

</body>
</html>

