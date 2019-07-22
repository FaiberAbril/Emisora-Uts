<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../../<?php base_url(); ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../<?php base_url(); ?>assets/css/styleadministrar.css">
        <link rel="stylesheet" href="../../<?php base_url(); ?>assets/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../../<?php base_url(); ?>assets/css/timepicki.css" >
        <title>Usuario</title>
    </head>
    <body>      
        <div class="wrapper1">
            <img id="logoradio" src="../../<?php base_url(); ?>assets/img/logo radio.png"  class="img-responsive" alt="Responsive image">
        </div>           
        <div class="wrapper"> 
            <div class="container">         
                <ul id="breadcrumb">
                    <li><a href="../../administrar/index"><span class="glyphicon glyphicon-home">&nbsp;</span>Inicio</a></li>
                    <li><a href="../../administrar/index"><span class="glyphicon glyphicon-cog">&nbsp;</span>Administrar</a></li>
                    <li><a href="../../programacion/index"><span class="glyphicon glyphicon-th">&nbsp;</span>Parrilla de programación</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-th">&nbsp;</span>Actualizar programación</a></li>
                    <li><a href="#"><span class="icon icon-arrow-down"> </span> </a></li>
                </ul>            
                <div></div> 

                <div class="container panel panel-default">
                    <div class="panel-body">
                        <form class="form" method="POST" action="../../<?php base_url() ?>programacion/actualizar">   
                            <h1 style="text-align:center">Parrilla de programacion</h1>
                            <div class="form-group">
                                <label for="inputperfil" class="col-sm-2 control-label">Segmento</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="perfil" id="pefil">

                                        <?php foreach ($combodos as $item) { ?>
                                        <?php if ( $datos[0]->cat_codcategoria==$item->cat_codcategoria ) { ?>
                                            <option value="<?php echo $item->cat_codcategoria ?>"><?php echo $item->cat_descripcion; ?></option>
                                        <?php } ?>
                                        <?php } ?>

                                        <?php foreach ($combodos as $item) { ?>
                                        <?php if ( $datos[0]->cat_codcategoria!=$item->cat_codcategoria ) { ?>
                                            <option value="<?php echo $item->cat_codcategoria ?>"><?php echo $item->cat_descripcion; ?></option>
                                        <?php } ?>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Hora Inicio</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="timepicker1" name="horaincio" placeholder="Hora Inicio" value="<?php echo $datos[0]->hora_inicio; ?>">
                                    <input type="hidden" class="form-control" id="timepicker1" name="codigo" value="<?php echo $datos[0]->pro_codprograma; ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Hora final</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="timepicker2" name="horafin" placeholder="Hora Final" value="<?php echo $datos[0]->hora_final; ?>" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputperfil" class="col-sm-2 control-label">Día Transmisión</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="dia" id="dia">                                 
                                       
                                          <?php foreach ($combo as $item) { ?>
                                         <?php if ($datos[0]->dia_codcategoria==$item->dia_codcategoria) { ?>
                                            <option value="<?php echo $item->dia_codcategoria ?>"><?php echo $item->dia_descripcion; ?></option>
                                        <?php } ?>
                                            <?php } ?>
                                            
                                              
                                        <?php foreach ($combo as $item) { ?>
                                         <?php if ($datos[0]->dia_codcategoria!=$item->dia_codcategoria) { ?>
                                            <option value="<?php echo $item->dia_codcategoria ?>"><?php echo $item->dia_descripcion; ?></option>
                                        <?php } ?>
                                         <?php } ?>
                                        
                                     </select>
                                </div>
                            </div>
                            <br>


                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Actualizar" type="submit" />
                            </div>
                            <br>
                        </form>                     
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
        $('#timepicker1').timepicki();
    </script>
    <script>
        $('#timepicker2').timepicki();
    </script>

</body>
</html>

