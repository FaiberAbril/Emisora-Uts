<!DOCTYPE HTML>
<html>
    <head>
        <title>UtsRadio</title>
        <link rel="stylesheet" href="<?php base_url(); ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php base_url(); ?>assets/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?php base_url(); ?>assets/css/toastr8.css"/>
         <script src="<?php base_url(); ?>assets/js/jquery.min.js"></script>
        <script src="<?php base_url(); ?>assets/js/bootstrap.min.js"></script>
        <link href="<?php base_url(); ?>assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
        <script src="<?php base_url(); ?>assets/js/jquery.min.js"></script>
        <link href="<?php base_url(); ?>assets/css/style_1.css" rel='stylesheet' type='text/css' />
        <link href="<?php base_url(); ?>assets/css/style_1.css" rel='stylesheet' type='text/css' />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    </script>
    <link href="<?php base_url(); ?>assets/css/animate.css" rel="stylesheet" type="text/css" media="all">
    <script src="<?php base_url(); ?>assets/js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <script type="text/javascript" src="<?php base_url(); ?>assets/js/move-top.js"></script>
    <script type="text/javascript" src="<?php base_url(); ?>assets/js/easing.js"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {
            $(".scroll").click(function (event) {
                event.preventDefault();
                $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
            });
        });
    </script>
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
</head>
<body>
    <!---- container ---->
    <!---- header ---->
    <div class="header">
       
        <div class="contenedor" id="inicio">
			<div class="logo">
			</div>
			  <div class='cssmenu'>
                        <ul>
                           <li><a href='#inicio'>Inicio</a></li>
                            <li><a href='#not'>Noticias</a></li>
                            <li><a href='#red'>Redes Sociales</a></li>
                            <li><a href='#pro'>Programacion</a></li>
                             <li><a href='#contactos'>Quienes somos</a></li>
                              <li><a href='#co'>Contanctos</a></li>
                        </ul>
            </div>
		</div>
     
        <script>
$(document).ready(function(){
	var altura = $('.cssmenu').offset().top;
	
	$(window).on('scroll', function(){
		if ( $(window).scrollTop() > altura ){
			$('.cssmenu').addClass('cssmenu-fixed');
		} else {
			$('.cssmenu').removeClass('cssmenu-fixed');
		}
	});
 
});
        </script>
        
        <div class="container ">
            <div class="row">
                <div class="col-md-12">  <div class="logoutsradio"> <img class="img-responsive"   src="<?php base_url(); ?>assets/img/logo radio.png" align ></div></div>
            </div>
            <div class="row">
                <div class="col-md-6">

                </div>
                <div class="col-md-6">
                    <div class="col-md-12">
                        <div class="slides">
                            <ul>
                                <li>
                                <center><div style="border-radius: 20px;font-weight: 900">UtsRadio la mejor programación para usted amigo Uteista</div></center>
                                </li>
                                <li>
                                <center><div style="border-radius: 20px;font-weight: 900">La mejor música la encuentras solo aquí en UtsRadio</div></center>
                                </li>
                                <li>
                                <center><div style="border-radius: 20px;font-weight: 900">Escucha UtsRadio a través de dispositivos móviles, búscanos en tu tienda móvil como UTS Radio</div></center>
                                </li>
                                <li>
                                <center><div style="border-radius: 20px;font-weight: 900">Emisora de las UTS, una nueva forma de escuchar radio en Bucaramanga y su área metropolitana</div></center>
                                </li>
                                <li>
                                <center><div style="border-radius: 20px;font-weight: 900">Estamos ubicados en la Biblioteca Virtual de las UTS, tercer piso del Centro Comercial Acrópolis</div></center>
                                </li>
                            </ul>
                        </div>
                    </div> 
                    <div class="col-md-12">
                        <div class="slides1">
                            <ul id="noticias">
                                <?php
                             
                                $i = date('W');
                                $dia = "nose";
                                $nose = "";

                                switch ($i) {
                                    case 0:
                                        $dia = $lunes;
                                        $nose = "Lunes";
                                        break;
                                    case 1:
                                        $dia = $martes;
                                        $nose = "Martes";
                                        break;
                                    case 2:
                                        $dia = $miercoles;
                                        $nose = "Mièrcoles";
                                        break;
                                    case 3:
                                        $dia = $jueves;
                                        $nose = "Jueves";
                                        break;
                                    case 4:
                                        $dia = $viernes;
                                        $nose = "Viernes";
                                        break;
                                    case 5:
                                        $dia = $sabado;
                                        $nose = "Sàbado";
                                        break;
                                    case 6:
                                        $dia = $domingo;
                                        $nose = "Domingo";
                                        break;
                                }


                                foreach ($dia as $item) {
                                    ?>
                                    <li>
                                    <center>
                                        <div style="border-radius: 20px;">

                                            <h2 style="color:#A4CC39;font-weight: 900;"> <?php echo $nose; ?></h2>
                                            <p style="font-weight: 900;"><?php echo $item->cat_descripcion ?></p>
                                            <?php echo $item->hora_inicio ?> hasta <?php echo $item->hora_final ?>
                                        </div>
                                    </center>
                                    </li>
                                <?php } ?> 

                            </ul>
                        </div>
                    </div> 
                </div>
            </div>
                  <a href="http://www.contadorvisitasgratis.com" title="contador de visitas"><img src="http://counter5.fcs.ovh/private/contadorvisitasgratis.php?c=f497de47f58d745eb725c14df87e68a6" border="0" title="contador de visitas" alt="contador de visitas"></a>
        <p style="color: #ffffff">Contador de visitas</p>
        </div>
      
    </div>

    <script type="application/javascript">
        //<![CDATA[
        var k={};k.duracion=3*1000;k.obtener=document.getElementsByClassName("slide");function autoslide(){var b=k.obtener;for(var a=0;a<b.length;++a){if(b[a].checked==true){if(a==b.length-1){k.obtener[0].checked=true}else{k.obtener[a+1].checked=true}break}}}var playloop=setInterval(function(){autoslide()},k.duracion);
        //]]>
    </script>

    <script type="text/javascript" src="<?php base_url(); ?>assets/js/modernizr.custom.min.js"></script>    
    <link href="<?php base_url(); ?>assets/css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
    <script src="<?php base_url(); ?>assets/js/jquery.magnific-popup.js" type="text/javascript"></script>								  

</div>
<!---- testmonials ---->
<div class="test-monials">
    <!----sreen-gallery-cursual---->
    <div class="sreen-gallery-cursual">
        <!-- requried-jsfiles-for owl -->
        <link href="<?php base_url(); ?>assets/css/owl.carousel.css" rel="stylesheet">
        <script src="<?php base_url(); ?>assets/js/owl.carousel.js"></script>
        <script>
        $(document).ready(function () {
            $("#owl-demo").owlCarousel({
                items: 1,
                lazyLoad: true,
                autoPlay: true,
                navigation: false,
                navigationText: false,
                pagination: true,
            });
        });
        </script>
        <!-- //requried-jsfiles-for owl -->
        <!-- start content_slider -->
        <div id="owl-demo" class="owl-carousel">
            <div class="item">
                <div class="test-monial-grid wow bounceIn" data-wow-delay="0.4s">
                    <center><a id="facebook" target="_blank" href="https://www.facebook.com/UTS-RADIO-354021704687301/timeline/"><img src="<?php base_url(); ?>assets/img/facebook.png" width="90" height="90"/></a></center>
                    <p>Ingresá a nuestra página oficial en Facebook...</p>
                </div>
            </div>
            <div class="item">
                <div class="test-monial-grid wow bounceIn" data-wow-delay="0.4s">
                    <a id="facebook" target="_blank" href="https://twitter.com/utsradio?ref_src=twsrc%5Etfw"><img src="<?php base_url(); ?>assets/img/tw.png" width="90" height="90"/></a>
                    <p>Ingresá a nuestra página oficial en twitter ...</p>
                </div>
            </div>
            <div class="item">
                <div class="test-monial-grid wow bounceIn" data-wow-delay="0.4s">
                    <a id="facebook" target="_blank" href="https://twitter.com/utsradio?ref_src=twsrc%5Etfw"><img src="<?php base_url(); ?>assets/img/logo.png" width="90" height="90"/></a>
                    <p>Ingresá a la página oficial Unidades Tecnológicas de Santander  ...</p>
                </div>
            </div>
            <div class="item">
                <div class="test-monial-grid wow bounceIn" data-wow-delay="0.4s">
                    <a id="facebook" target="_blank" href="https://play.google.com/store/apps/details?id=com.teveo.play.co.uts"><img src="<?php base_url(); ?>assets/img/s.png" width="90" height="90"/></a>
                    <p>Escucha UtsRadio desde tu mòvil descarga la aplicacion  en un solo link ...</p>
                </div>
            </div>

            <!--//sreen-gallery-cursual---->
        </div>
    </div>
    <!---- testmonials ---->
</div>
<!---- header ---->
<!---- content ---->
<div class="content">
    <div class="top-grids">

        
                <div class="slides2">
                    <ul id="not">
                                <?php foreach ($listar as $item) { ?>
              <li>
                  <div class="well">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3 style="text-align:center;color: #66994F;font-size: 36px;"><?php echo $item->art_titulo ?> </h3>
                        </div>
                        <div class="col-lg-6">
                            <p><?php echo $item->art_descripcion ?></p>
                        </div>
                        <div class="col-lg-6">
                            <img class="img" width="100%" height="400" src="<?php base_url(); ?>uploads/noticias/<?php echo $item->mul_ruta ?>" alt="imagen">
                        </div>
                        <div class="col-lg-12">
                            <p style="text-align:center">fecha de publicacion &nbsp;<small> <?php echo $item->art_fecha ?></small></p>
                        </div>
                    </div>    
                      </div> 
                </li>
                <?php } ?>  

                       </ul>
                    </div>

</div>
<script>
   $(window).load(function() {
    $('.flexslider').flexslider({
       animation: "slide",
       controlsContainer: ".flex-container"
    });
});
});
</script>
<!---- testmonials ---->
<div class="test-monials" id="red">
    <div id="owl-demo" >
        <div class="item">
            <div class="test-monial-grid wow bounceIn" data-wow-delay="0.4s">
                <p>Nuestras redes sociales...</p>
            </div>
        </div>
    </div>
    <!--//sreen-gallery-cursual---->
</div>
</div>
<!---- testmonials ---->
<!---- content-bottom-grids ----->
<div class="content-bottom-grids">
    <div class="container">
        <div class="col-md-6" data-wow-delay="0.4s">
            <div class="content-bottom-grids-left-grid frist-grid">
                <div class="fb-page" data-href="https://www.facebook.com/UTS-RADIO-354021704687301/?fref=ts" data-tabs="timeline" data-width="800" data-height="800" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
            </div>               
        </div>
        <div class="col-md-6 content-bottom-grids-right wow fadeInRight" data-wow-delay="0.4s">
            <a class="twitter-timeline" href="https://twitter.com/utsradio" data-widget-id="692452798882041856">Tweets por el @utsradio.</a>
            <script>!function (d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                    if (!d.getElementById(id)) {
                        js = d.createElement(s);
                        js.id = id;
                        js.src = p + "://platform.twitter.com/widgets.js";
                        fjs.parentNode.insertBefore(js, fjs);
                    }
                }(document, "script", "twitter-wjs");</script>
        </div>
    </div>
</div>
<script>(function (d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v2.5";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<!---- content-bottom-grids ----->
<!----- latest-news ---->
<div class="latest-news">
    <script>
        $(document).ready(function () {
            $("#owl-demo1").owlCarousel({
                items: 1,
                lazyLoad: true,
                autoPlay: true,
                navigation: true,
                navigationText: false,
                pagination: false,
            });
        });
    </script>
    <div class="test-monials" id="pro">
        <div id="owl-demo" >
            <div class="item">
                <div class="test-monial-grid wow bounceIn" data-wow-delay="0.4s">
                    <p>Tenemos la mejor programación musical...</p>
                </div>
            </div>
        </div>
        <!--//sreen-gallery-cursual---->
    </div>
    <br>
    <div id="owl-demo1" class="owl-carousel">
        <div class="item">
            <div class="recent-news-grid">
                <div class="col-md-7 recent-news-grid-left">
                    <center> <h4 style="font-size: 40px;color: #5A6667">Lunes</h4></center>
                    <?php foreach ($lunes as $item2) { ?>
                        <div class="recent-news-grid-left-grids">
                            <div class="recent-news-grid-left-grid">
                                <div class="recent-news-grid-left-grid-info">
                                    <h4><?php echo $item2->cat_descripcion ?></h4>
                                    <span> <?php echo $item2->hora_inicio ?> hasta <?php echo $item2->hora_final ?></span>
                                </div>
                            </div>
                        </div>
                    <?php } ?> 
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>

        <div class="item">
            <div class="recent-news-grid">
                <div class="col-md-7 recent-news-grid-left">
                    <center> <h4 style="font-size: 40px;color: #5A6667">Martes</h4></center>
                    <?php foreach ($martes as $item3) { ?>
                        <div class="recent-news-grid-left-grids">
                            <div class="recent-news-grid-left-grid">
                                <div class="recent-news-grid-left-grid-info">
                                    <h4><?php echo $item3->cat_descripcion ?></h4>
                                    <span> <?php echo $item3->hora_inicio ?> hasta <?php echo $item3->hora_final ?></span>
                                </div>
                            </div>
                        </div>
                    <?php } ?> 
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>

        <div class="item">
            <div class="recent-news-grid">
                <div class="col-md-7 recent-news-grid-left">
                    <center> <h4 style="font-size: 40px;color: #5A6667">Mièrcoles</h4></center>
                    <?php foreach ($miercoles as $item4) { ?>
                        <div class="recent-news-grid-left-grids">
                            <div class="recent-news-grid-left-grid">
                                <div class="recent-news-grid-left-grid-info">
                                    <h4><?php echo $item4->cat_descripcion ?></h4>
                                    <span> <?php echo $item4->hora_inicio ?> hasta <?php echo $item4->hora_final ?></span>
                                </div>
                            </div>
                        </div>
                    <?php } ?> 
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>

        <div class="item">
            <div class="recent-news-grid">
                <div class="col-md-7 recent-news-grid-left">
                    <center> <h4 style="font-size: 40px;color: #5A6667">Jueves</h4></center>
                    <?php foreach ($jueves as $item5) { ?>
                        <div class="recent-news-grid-left-grids">
                            <div class="recent-news-grid-left-grid">
                                <div class="recent-news-grid-left-grid-info">
                                    <h4><?php echo $item5->cat_descripcion ?></h4>
                                    <span> <?php echo $item5->hora_inicio ?> hasta <?php echo $item5->hora_final ?></span>
                                </div>
                            </div>
                        </div>
                    <?php } ?> 
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <div class="item">
            <div class="recent-news-grid">
                <div class="col-md-7 recent-news-grid-left">
                    <center> <h4 style="font-size: 40px;color: #5A6667">Viernes</h4></center>
                    <?php foreach ($viernes as $item6) { ?>
                        <div class="recent-news-grid-left-grids">
                            <div class="recent-news-grid-left-grid">
                                <div class="recent-news-grid-left-grid-info">
                                    <h4><?php echo $item6->cat_descripcion ?></h4>
                                    <span> <?php echo $item6->hora_inicio ?> hasta <?php echo $item6->hora_final ?></span>
                                </div>
                            </div>
                        </div>
                    <?php } ?> 
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>

        <div class="item">
            <div class="recent-news-grid">
                <div class="col-md-7 recent-news-grid-left">
                    <center> <h4 style="font-size: 40px;color: #5A6667">Sabado</h4></center>
                    <?php foreach ($sabado as $item7) { ?>
                        <div class="recent-news-grid-left-grids">
                            <div class="recent-news-grid-left-grid">
                                <div class="recent-news-grid-left-grid-info">
                                    <h4><?php echo $item7->cat_descripcion ?></h4>
                                    <span> <?php echo $item7->hora_inicio ?> hasta <?php echo $item7->hora_final ?></span>
                                </div>
                            </div>
                        </div>
                    <?php } ?> 
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>

        <div class="item">
            <div class="recent-news-grid">
                <div class="col-md-7 recent-news-grid-left">
                    <center> <h4 style="font-size: 40px;color: #5A6667">Domingo</h4></center>
                    <?php foreach ($domingo as $item8) { ?>
                        <div class="recent-news-grid-left-grids">
                            <div class="recent-news-grid-left-grid">
                                <div class="recent-news-grid-left-grid-info">
                                    <h4><?php echo $item8->cat_descripcion ?></h4>
                                    <span> <?php echo $item8->hora_inicio ?> hasta <?php echo $item8->hora_final ?></span>
                                </div>
                            </div>
                        </div>
                    <?php } ?> 
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <!--//sreen-gallery-cursual---->
</div>
<!----- latest-news ---->


<div class="test-monials">
    <div id="owl-demo" >
        <div class="item">
            <div class="test-monial-grid wow bounceIn" data-wow-delay="0.4s">
                <center ><p style="font-size: 36px">UTSRadio 101,7 F.M.</p></center>                            
                </p>
            </div>
        </div>
    </div>
    <!--//sreen-gallery-cursual---->
</div>


<!---- content ---->
<!--- footer ---->
<div class="footer" id="contactos">
    <div class="container">
        <div class="footer-grids">

            <div class="row">
                <div class="col-lg-6" style="background-color: #ffffff;border-radius:20px;">
                    <center><p style="font-size:26px;color:#7BC13C;border-radius:20px;">MISIÓN</p></center>
                    <p style="font-size:19px;">La emisora UtsRadio es el medio de expresión de la comunidad educativa de las Unidades Tecnológicas de Santander, en los campos científicos, tecnológicos, culturales y artísticos, buscando el fortalecimiento de los valores esenciales de la comunidad uteista, con la difusión de contenidos esenciales y una novedosa programación de calidad creativa e investigativa con un estilo propio que promueva la divulgación del conocimiento, los valores personales y la libertad de expresión.</p>
                </div>
                <div class="col-lg-1">

                </div>
                <div class="col-lg-5" style="background-color: #ffffff;border-radius:20px;">
                    <center><p style="font-size:26px;color:#7BC13C" > VISIÓN</p></center>
                    <p style="font-size:19px;">En corto plazo la emisora UtsRadio buscará convertirse en la líder de las emisoras institucionales de la FM y la Internet, consolidándose así como una alternativa radial de primera calidad en programación, en contenido, tecnología y en recursos humanos con el fin de contribuir a la solución de problemas, para satisfacer las necesidades de la comunidad, tanto social como cultural.</p>
                </div>
            </div>



            <div class="footer-logo text-center">
                <button id="boton" type="button"  class="btn btn-success" data-toggle="modal" data-target=".bs-example-modal-sm">Portal de Administracion</button>


                <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
                    <div class="modal-dialog modal-sm">
                        <div class="modal-content">
                            <div class="modal-body">
                                <!--inicio formulario login-->
                                <?php echo form_open('inicio/login'); ?>
                                <div class="text-center"><img src="<?php base_url(); ?>assets/img/avatar.jpg" alt="avatar" ></div>
                                <input type="text"     class="form-control" placeholder="usuario"  name="username" id="username" style="width: 90%">
                                <input type="password" class="form-control" placeholder="Password" name="password" id="password" style="width: 90%" >
                                <button class="btn btn-danger" id="cerrar" data-dismiss="modal" aria-hidden="true">Cerrar</button>
                                <input class="btn btn-success " id="hola" value="ingresar" type="submit" />
                                <?php
                                echo form_close();
                                ?>           
                                <!--fin formulario login-->
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <br>
                    <br>

                </div>


                <div class="col-lg-12" style="border-radius: 15px">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d808.6218648051332!2d-73.12197274390445!3d7.104452829383956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sco!4v1453933354944" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>



                <script type="text/javascript">
                    $(document).ready(function () {
                        /*
                         var defaults = {
                         containerID: 'toTop', // fading element id
                         containerHoverID: 'toTopHover', // fading element hover id
                         scrollSpeed: 1200,
                         easingType: 'linear' 
                         };
                         */

                        $().UItoTop({easingType: 'easeOutQuart'});

                    });
                </script>
                <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
            </div>
            <!---- footer-logo ---->
        </div>
    </div>
    <!--- footer ---->
</div>
<!---- container ---->

<div class="text-footer" id="co">Unidades Tecnológicas de Santander - Calle de los Estudiantes # 9-82 Ciudadela Real de Minas - Bucaramanga - Santander - Colombia<br>
    Email: contactenos@correo.uts.edu.co | PBX (+57) 7 6917700 - Línea gratuita: 018000 940203 - Fax: (+57) 7 6917691 | notificaciones judiciales: <a href="mailto:juridica@correo.uts.edu.co">juridica@correo.uts.edu.co</a><br>Horario de Atención: Lunes a viernes de 7:30 a.m. a 11:30 a.m. - de 2:00 p.m. a 6:00 p.m.<br>
    Copyright © 2013 Unidades Tecnológicas de Santander. Todos los Derechos Reservados.<br>
    Última actualización: Jueves, 01 de octubre de 2015<br><br>
</div>
</body>
</html>
