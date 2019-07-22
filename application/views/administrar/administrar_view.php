<html>
    <head>
        <meta charset="UTF-8">
        <title>UtsRadio</title>
        <link rel="stylesheet" href="../<?php base_url(); ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="../<?php base_url(); ?>assets/css/styleadministrar.css">
        <link rel="stylesheet" href="../<?php base_url(); ?>assets/css/bootstrap-theme.min.css">
    </head>
    <body id="bg"> 
        <div class="wrapper1">
              <img id="logoradio" src="../<?php base_url(); ?>assets/img/logo radio.png"  class="img-responsive" alt="Responsive image">
        </div>                  
            <div class="container">         
                <ul id="breadcrumb">
                    <li><a href="#"><span class="glyphicon glyphicon-home">&nbsp;</span>Inicio</a></li>
                    <li><a href="#"><span class="glyphicon glyphicon-cog">&nbsp;</span>Administrar</a></li>
                  <li><a href="#"><span class="icon icon-double-angle-right"></span></a></li>
                </ul>
                
                <div class="row marc">
                    <div class="col-xs-2 marco">
                        <img id="imgusuario1" src="../<?php base_url(); ?>assets/img/administrar/usuario.png"  class="img-responsive" alt="Responsive image">                 
                        <a style="text-decoration: none" href="../<?php base_url(); ?>usuario/index"><button type="button" class="btn btn-success btn-lg btn-block">Usuario</button></a>
                    </div>

                    <div class="col-sm-2 marco1">
                        <img id="imgusuario1" src="../<?php base_url(); ?>assets/img/administrar/cal.png"  class="img-responsive" alt="Responsive image">
                        <a style="text-decoration: none" href="../<?php base_url(); ?>programacion/administrar"><button type="button" class="btn btn-success btn-lg btn-block">Programacion</button></a>
                    </div>

                    <div class="col-sm-2 marco">
                        <img id="imgusuario1" src="../<?php base_url(); ?>assets/img/administrar/noticias.png"  class="img-responsive" alt="Responsive image">
                        <a style="text-decoration: none" href="../<?php base_url(); ?>noticias/administrar"><button type="button" class="btn btn-success btn-lg btn-block">Noticias</button></a>
                    </div>

                </div>
                <br>
                
                <a style="text-decoration: none" href="../<?php base_url(); ?>inicio/red"><button type="button" class="btn btn-success btn-lg btn-block">Pagina Principal</button></a>
                
                </div> 

        </div>
        <script src="../<?php base_url(); ?>assets/js/jquery.min.js"></script>
        <script src="../<?php base_url(); ?>assets/js/bootstrap.min.js"></script>
    </body>
</html>

