<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../<?php base_url(); ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../<?php base_url(); ?>assets/css/styleadministrar.css">
        <link rel="stylesheet" href="../<?php base_url(); ?>assets/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="../<?php base_url(); ?>assets/css/timepicki.css" >
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
                    <li><a href="#"><span class="glyphicon glyphicon-th">&nbsp;</span>Parrilla de programación</a></li>
                    <li><a href="#"><span class="icon icon-arrow-down"> </span> </a></li>
                </ul>            
                <div></div> 

                <div class="container panel panel-default">
                    <h3 style="text-align:center">Segmentos de programación</h3>
                    <div class="panel-body">

                        <button type="submit" class="btn btn-default btn-lg" style="width:100% " >
                            <a style="text-decoration: none;color: black" href="../<?php base_url(); ?>programacion/admin" >

                                <span class="glyphicon glyphicon-star" aria-hidden="true">&nbsp;</span>Entrar

                            </a>
                        </button> 

                    </div>
                </div>   

             

                <div class="container" id="collapseExample">
                    <div class="well">
                        <form class="form" method="POST" action="../<?php base_url() ?>programacion/crear">   
                            <h1 style="text-align:center">Parrilla de programacion</h1>
                            <div class="form-group">
                                <label for="inputperfil" class="col-sm-2 control-label">Segmento</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="perfil" id="pefil" name="perfil">
                                        <?php foreach ($combodos as $item) { ?>
                                            <option value="<?php echo $item->cat_codcategoria ?>"><?php echo $item->cat_descripcion; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Hora Inicio</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="timepicker1" name="horaincio" placeholder="Hora Inicio">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputPassword3" class="col-sm-2 control-label">Hora final</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="timepicker2" name="horafin" placeholder="Hora Final" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputperfil" class="col-sm-2 control-label">Día Transmisión</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="dia" id="dia">
                                        <?php foreach ($combo as $item) { ?>
                                            <option value="<?php echo $item->dia_codcategoria ?>"><?php echo $item->dia_descripcion; ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <br>


                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Guardar" type="submit" />
                            </div>
                            <br>
                        </form>              


                    </div>
                </div>


                





                <div class="container" id="collapseExample3">
                    <div class="well">
                        <h3 style="text-align:center">Lunes</h3>
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>Parrilla</td>
                                    <th>hora Inicio</th>
                                    <th>Hora Final</th>
                                    <th>Herramientas</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($lunes as $item) { ?>
                                    <tr>
                                        <td> <?php echo $item->cat_descripcion ?> </td>                       
                                        <td> <?php echo $item->hora_inicio ?> </td>
                                        <td> <?php echo $item->hora_final ?> </td>
                                        <td><?php echo anchor('programacion/deleteprograma/' . $item->pro_codprograma, '<input type="submit" class="btn btn-primary" value="Eliminar" type="submit"/>') ?>
                                            <?php echo anchor('programacion/programacionACtu/' . $item->pro_codprograma, '<input type="submit" class="btn btn-primary" value="Actualizar" type="submit"/>') ?></td>
                                    <?php } ?>  
                            </tbody>
                        </table> 
                    </div>
                </div>


                <div class="container" id="collapseExample4">
                    <div class="well">
                        <h3 style="text-align:center">Martes</h3>
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>Parrilla</td>
                                    <th>hora Inicio</th>
                                    <th>Hora Final</th>
                                    <th>Herramientas</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($martes as $item) { ?>
                                    <tr>
                                        <td> <?php echo $item->cat_descripcion ?> </td>                       
                                        <td> <?php echo $item->hora_inicio ?> </td>
                                        <td> <?php echo $item->hora_final ?> </td>
                                        <td><?php echo anchor('programacion/deleteprograma/' . $item->pro_codprograma, '<input type="submit" class="btn btn-primary" value="Eliminar" type="submit"/>') ?>
                                            <?php echo anchor('programacion/programacionACtu/' . $item->pro_codprograma, '<input type="submit" class="btn btn-primary" value="Actualizar" type="submit"/>') ?></td>
                                    <?php } ?>  
                            </tbody>
                        </table> 
                    </div>
                </div>


                <div class="container" id="collapseExample5">
                    <div class="well">
                        <h3 style="text-align:center">Miercoles</h3>
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>Parrilla</td>
                                    <th>hora Inicio</th>
                                    <th>Hora Final</th>
                                    <th>Herramientas</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($miercoles as $item) { ?>
                                    <tr>
                                        <td> <?php echo $item->cat_descripcion ?> </td>                       
                                        <td> <?php echo $item->hora_inicio ?> </td>
                                        <td> <?php echo $item->hora_final ?> </td>
                                        <td><?php echo anchor('programacion/deleteprograma/' . $item->pro_codprograma, '<input type="submit" class="btn btn-primary" value="Eliminar" type="submit"/>') ?>
                                            <?php echo anchor('programacion/programacionACtu/' . $item->pro_codprograma, '<input type="submit" class="btn btn-primary" value="Actualizar" type="submit"/>') ?></td>
                                    <?php } ?>  
                            </tbody>
                        </table> 
                    </div>
                </div>


                <div class="container" id="collapseExample6">
                    <div class="well">
                        <h3 style="text-align:center">jueves</h3>
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>Parrilla</td>
                                    <th>hora Inicio</th>
                                    <th>Hora Final</th>
                                    <th>Herramientas</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($jueves as $item) { ?>
                                    <tr>
                                        <td> <?php echo $item->cat_descripcion ?> </td>                       
                                        <td> <?php echo $item->hora_inicio ?> </td>
                                        <td> <?php echo $item->hora_final ?> </td>
                                        <td><?php echo anchor('programacion/deleteprograma/' . $item->pro_codprograma, '<input type="submit" class="btn btn-primary" value="Eliminar" type="submit"/>') ?>
                                            <?php echo anchor('programacion/programacionACtu/' . $item->pro_codprograma, '<input type="submit" class="btn btn-primary" value="Actualizar" type="submit"/>') ?></td>
                                    <?php } ?>  
                            </tbody>
                        </table> 
                    </div>
                </div>


                <div class="container" id="collapseExample7">
                    <div class="well">
                        <h3 style="text-align:center">viernes</h3>
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>Parrilla</td>
                                    <th>hora Inicio</th>
                                    <th>Hora Final</th>
                                    <th>Herramientas</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($viernes as $item) { ?>
                                    <tr>
                                        <td> <?php echo $item->cat_descripcion ?> </td>                       
                                        <td> <?php echo $item->hora_inicio ?> </td>
                                        <td> <?php echo $item->hora_final ?> </td>
                                        <td><?php echo anchor('programacion/deleteprograma/' . $item->pro_codprograma, '<input type="submit" class="btn btn-primary" value="Eliminar" type="submit"/>') ?>
                                            <?php echo anchor('programacion/programacionACtu/' . $item->pro_codprograma, '<input type="submit" class="btn btn-primary" value="Actualizar" type="submit"/>') ?></td>
                                    <?php } ?>  
                            </tbody>
                        </table> 
                    </div>
                </div>

                <div class="container" id="collapseExample8">
                    <div class="well">
                        <h3 style="text-align:center">sabado</h3>
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>Parrilla</td>
                                    <th>hora Inicio</th>
                                    <th>Hora Final</th>
                                    <th>Herramientas</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($sabado as $item) { ?>
                                    <tr>
                                        <td> <?php echo $item->cat_descripcion ?> </td>                       
                                        <td> <?php echo $item->hora_inicio ?> </td>
                                        <td> <?php echo $item->hora_final ?> </td>
                                        <td><?php echo anchor('programacion/deleteprograma/' . $item->pro_codprograma, '<input type="submit" class="btn btn-primary" value="Eliminar" type="submit"/>') ?>
                                            <?php echo anchor('programacion/programacionACtu/' . $item->pro_codprograma, '<input type="submit" class="btn btn-primary" value="Actualizar" type="submit"/>') ?></td>
                                    <?php } ?>  
                            </tbody>
                        </table> 
                    </div>
                </div>

                <div class="container" id="collapseExample9">
                    <div class="well">
                        <h3 style="text-align:center">domigno</h3>
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>Parrilla</td>
                                    <th>hora Inicio</th>
                                    <th>Hora Final</th>
                                    <th>Herramientas</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($domingo as $item) { ?>
                                    <tr>
                                        <td> <?php echo $item->cat_descripcion ?> </td>                       
                                        <td> <?php echo $item->hora_inicio ?> </td>
                                        <td> <?php echo $item->hora_final ?> </td>
                                        <td><?php echo anchor('programacion/deleteprograma/' . $item->pro_codprograma, '<input type="submit" class="btn btn-primary" value="Eliminar" type="submit"/>') ?>
                                            <?php echo anchor('programacion/programacionACtu/' . $item->pro_codprograma, '<input type="submit" class="btn btn-primary" value="Actualizar" type="submit"/>') ?></td>
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
                                <h4 class="modal-title" id="myModalLabel">Crear Segmentos</h4>
                            </div>

                            <div class="modal-body">                         
                                <form class="form-horizontal" method="POST" action="../<?php base_url() ?>programacion/segmento">

                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Nombres segmento</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
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

