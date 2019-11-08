<?php
session_start();

	if(isset($_SESSION['Usuario'])){

	}else{
		header("Location: index.html?Error=Acceso denegado");
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-149897873-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-149897873-1');
  </script>

<title>Inicio</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Freightage Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link href="css/font-awesome1.css" rel="stylesheet">
<link href="css/style1.css" rel='stylesheet' type='text/css' />
<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">

<!--web-fonts-->
<link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
<!--//web-fonts-->
<!--//fonts-->
</head>
<body>
<div class="banner-w3layouts" id="home">
		<!--Top-Bar-->
	<div class="header">
		<nav class="navbar navbar-default">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a  href="indexinicio.html"><img src="images/logo.jpg" width="180px" height="110px" alt="Logo"></a>
					</div>
					<div class="top-nav-text">
						<div class="nav-contact-w3ls"><span class="glyphicon glyphicon glyphicon-phone" aria-hidden="true"></span><p>Llamanos ahora mismo <br> <span class="call"> +52 722 428 2570</span></p></div>
						<a class="page-scroll" href="cerrar.php" data-hover="LOGIN">Cerrar Sesión</a>
					</div>
					<!-- navbar-header -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav navbar-right">
							<li><a href="indexinicio.php">INICIO</a></li>
							<li><a href="acerca inicio.php">¿QUIENES SOMOS?</a></li>
							<li><a href="coches baja inicio.php">COCHES BASICOS</a></li>
              <li><a href="coches mediana inicio.php">COCHES ESTANDAR</a></li>
              <li><a href="coches alto inicio.php">COCHES DE LUJO</a></li>
							<li><a href="rentas.php">RENTA UN AUTO</a></li>
							<li><a href="contacto inicio.php">CONTACTANOS</a></li>
							<li><a href="ubicacion inicio.php">UBICACION</a>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</nav>

	</div>
		<!--//Top-Bar-->
			<!-- modal -->
	<div class="modal about-modal w3-agileits fade" id="myModal2" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body login-page "><!-- login-page -->
          <div class="w3ls-login">
            <!-- form starts here -->
            <form action="verificar.php" method="POST">
                  <div class="agile-field-txt">
                    <label>
                    <i class="fa fa-user" aria-hidden="true"></i>  Correo Electrónico :</label>
                      <input class="formulario" type="text" REQUIRED name="email" placeholder="Ej. ejemplo@email.com">
                  </div>
              <div class="agile-field-txt">
                <label>
                <i class="fa fa-lock" aria-hidden="true"></i>  Contraseña :</label>
                  <input class="formulario" type="password" REQUIRED name="contrase" placeholder="Escribe tu Contraseña">
              </div>
              <div class="w3ls-login  w3l-sub">
                <input type="submit" value="Iniciar Sesión">
              </div>
            </form>
          </div>
            </div>
        </div>
						</div>
				</div> <!-- //login-page -->
	<!-- //modal -->
	<!-- modal -->
	<div class="modal about-modal w3-agileits fade" id="myModal3" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<div class="modal-body login-page "><!-- login-page -->
          <div class="w3ls-login">
            <!-- form starts here -->
            <form action="alta.php" method="POST">
              <div class="agile-field-txt">
                <label>
                  Nombre :</label>
                <input type="text" REQUIRED name="nombre" placeholder="Nombre">
              </div>
              <div class="agile-field-txt">
                <label>
                  Apellido Paterno :</label>
                  <input class="formulario" type="text" REQUIRED name="apellido_p" placeholder="Apellido Paterno">
              </div>
              <div class="agile-field-txt">
                <label>
                  Apellido Materno :</label>
                  <input class="formulario" type="text" REQUIRED name="apellido_m" placeholder="Apellido Materno">
              </div>
              <div class="agile-field-txt">
                <label>
                  Edad :</label>
                  <input class="formulario" type="text" REQUIRED name="edad" placeholder="Edad">
              </div>
              <div class="agile-field-txt">
                <label>
                  Sexo :</label><br>
                  <div class="form-check">
                      <div class="radio">
                          <label for="radio1" class="form-check-label ">
                              <input type="radio" id="radio1" name="sexo" value="H" class="form-check-input">Hombre
                          </label>
                      </div>
                      <div class="radio">
                          <label for="radio2" class="form-check-label ">
                              <input type="radio" id="radio2" name="sexo" value="M" class="form-check-input">Mujer
                          </label>
                      </div>
                  </div>              </div>
                  <div class="agile-field-txt">
                    <label>
                      Telefono :</label>
                      <input class="formulario" type="text" REQUIRED name="telefono" placeholder="Ej. +52 722 834 0460">
                  </div>
                  <div class="agile-field-txt">
                    <label>
                      Número de Licencia :</label>
                      <input class="formulario" type="text" REQUIRED name="licencia" placeholder="Ej. 5641265">
                  </div>
                  <div class="agile-field-txt">
                    <label>
                      Correo Electrónico :</label>
                      <input class="formulario" type="text" REQUIRED name="email" placeholder="Ej. ejemplo@email.com">
                  </div>
              <div class="agile-field-txt">
                <label>
                  Contraseña :</label>
                  <input class="formulario" type="password" REQUIRED name="contrase" placeholder="Escribe tu Contraseña">
              </div>
              <div class="w3ls-login  w3l-sub">
                <input type="submit" value="Registrarse">
              </div>
            </form>
          </div>
						</div>
				</div> <!-- //login-page -->
			</div>
		</div>
	<!-- //modal -->
<!--banner-->
		<!--Slider-->
			<div class="w3l_banner_info">
				<div class="col-md-7 slider">
					<div class="callbacks_container">
								<ul class="rslides" id="slider3">
									<li>
										<div class="slider_banner_info">
                      <h4>SEGURO</h4>
           <p>Todos nuestros autos cuentan con un seguro</p>
										</div>

									</li>
									<li>
										<div class="slider_banner_info">
                      <h4>PROMOCIONES</h4>
						<p>Descubre las diferentes promociones que tenemos para ti</p>
										</div>

									</li>
									<li>
										<div class="slider_banner_info">
                      <h4>PAGO SEGURO</h4>
						<p>Todos tus datos son guardados con seguridad</p>
										</div>

									</li>
									<li>
										<div class="slider_banner_info">
                      <h4>CALIDAD Y MANTENIMIENTO</h4>
						<p>Realizamos mantenimiento a nuestros autos antes y despues de rentarlos ya que son autos de calidad</p>
										</div>

									</li>
								</ul>
					</div>
				</div>
		</div>
			<!--//Slider-->
			<div class="clearfix"></div>
						</div>

<!--//banner-->


<!-- capabilities -->
	<div class="capabilities" id="capabilities">
		<div class="container">
			<h4 class="title-w3">Acerca de Nuestros Coches</h4>
			<div class="why-choose-agile-grids-top">
				<div class="col-md-4 agileits-w3layouts-grid">
					<div class="wthree_agile_us leftw3ls">
						<div class="col-xs-8 agile-why-text siml-w3ls">
							<h4>Seguridad en caso de accidente</h4>
						</div>
						<div class="col-xs-4 agile-why-text siml-w3ls">
							<div class="wthree_features_grid left hvr-rectangle-out">
								<i class="fa fa-plane" aria-hidden="true"></i>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="wthree_agile_us leftw3ls">
						<div class="col-xs-8 agile-why-text siml-w3ls">
							<h4>Ahorro de combustible</h4>
						</div>
						<div class="col-xs-4 agile-why-text siml-w3ls">
							<div class="wthree_features_grid left hvr-rectangle-out">
								<i class="fa fa-truck" aria-hidden="true"></i>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="wthree_agile_us leftw3ls">
						<div class="col-xs-8 agile-why-text siml-w3ls">
							<h4>Bajo coste de mantenimiento</h4>
						</div>
						<div class="col-xs-4 agile-why-text siml-w3ls">
							<div class="wthree_features_grid left hvr-rectangle-out">
								<i class="fa fa-wrench" aria-hidden="true"></i>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 agileits-w3layouts-grid mid-img-agileits">

				</div>
				<div class="col-md-4 agileits-w3layouts-grid">
					<div class="wthree_agile_us rightw3ls">
					<div class="col-xs-4 agile-why-text simr-w3ls">
							<div class="wthree_features_grid right hvr-rectangle-out">
								<i class="fa fa-cogs" aria-hidden="true"></i>
							</div>
						</div>
						<div class="col-xs-8 agile-why-text two simr-w3ls">
							<h4>Comodidad</h4>
						</div>

						<div class="clearfix"> </div>
					</div>
					<div class="wthree_agile_us rightw3ls">
					<div class="col-xs-4 agile-why-text simr-w3ls">
							<div class="wthree_features_grid right hvr-rectangle-out">
								<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
							</div>
						</div>
						<div class="col-xs-8 agile-why-text two simr-w3ls">
							<h4>Calidad del acabado</h4>
						</div>

						<div class="clearfix"> </div>
					</div>
					<div class="wthree_agile_us rightw3ls">
					<div class="col-xs-4 agile-why-text simr-w3ls">
							<div class="wthree_features_grid right hvr-rectangle-out">
								<i class="fa fa-clock-o" aria-hidden="true"></i>
							</div>
						</div>
						<div class="col-xs-8 agile-why-text two simr-w3ls">
							<h4>Espaciosos / Amplios</h4>
						</div>

						<div class="clearfix"> </div>
					</div>

						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
<!-- //capabilities -->

<!-- gallery -->
		<div class="gallery"  id="gallery">
			<div class="container">
				<h4 class="title-w3">Visita La Galeria De Nuestros Vehiculos Disponibles</h4>
				<div id="jzBox" class="jzBox">
					<div id="jzBoxNextBig"></div>
					<div id="jzBoxPrevBig"></div>
					<img src="#" id="jzBoxTargetImg" alt="">
					<div id="jzBoxBottom">
						<div id="jzBoxTitle"></div>
						<div id="jzBoxCounter"></div>
						<span id="jzBoxMoreItems">
							<i class="glyphicon glyphicon-chevron-left" id="jzBoxPrev"></i> &nbsp;
							<i class="glyphicon glyphicon-chevron-right" id="jzBoxNext"></i> &nbsp;
						</span>
						<i class="glyphicon glyphicon-remove-circle" id="jzBoxClose"></i>
					</div>
				</div>
				<div class="gallery-grids-row">
					<div class="col-md-4 gallery-grid">
						<div class="wpf-demo-4">

								<img src="images/baratos1.png" class="img-responsive" alt=" " />
								<div class="view-caption">
									<p>Coches Básicos</p>
								</div>

						</div>
						<div class="wpf-demo-4">

								<img src="images/baratos8.png" alt=" " class="img-responsive" />
								<div class="view-caption">
									<p>Coches Básicos</p>
								</div>

						</div>
						<div class="wpf-demo-4">

								<img src="images/baratos3.png" alt=" " class="img-responsive" />
								<div class="view-caption">
                  <p>Coches Básicos</p>
								</div>

						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-4 gallery-grid">
						<div class="wpf-demo-4">

                <img src="images/estandar3.png" alt=" " class="img-responsive" />
								<div class="view-caption">
                  <p>Coches Estándar</p>
								</div>

						</div>
						<div class="wpf-demo-4">

                <img src="images/estandar7.png" alt=" " class="img-responsive" />
								<div class="view-caption">
                  <p>Coches Estándar</p>
								</div>

						</div>
            <div class="wpf-demo-4">

                <img src="images/estandar6.png" alt=" " class="img-responsive" />
								<div class="view-caption">
                  <p>Coches Estándar</p>
								</div>

						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="col-md-4 gallery-grid">
						<div class="wpf-demo-4">

                <img src="images/lujo1.png" alt=" " class="img-responsive" />
								<div class="view-caption">
                  <p>Coches De Lujo</p>
								</div>

						</div>
            <div class="wpf-demo-4">

                <img src="images/lujo2.png" alt=" " class="img-responsive" />
								<div class="view-caption">
                  <p>Coches De Lujo</p>
								</div>

						</div>
            <div class="wpf-demo-4">

                <img src="images/lujo3.png" alt=" " class="img-responsive" />
								<div class="view-caption">
                  <p>Coches De Lujo</p>
								</div>

						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
		<!-- //gallery -->


	<div class="copy">
    <p>© 2019 RentaCar . Derechos Reservados | Visita nuestras redes sociales<br>
    		<a href="https://www.facebook.com">Facebook</a><br>
    		<a href="https://www.twitter.com">Twitter</a><br>
    		<a href="https://www.instagram.com">Instagram</a><br>
    	</p>
	</div>
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- jarallax-js -->
			<script src="js/jarallax.js"></script>
			<script src="js/SmoothScroll.min.js"></script>
			<script type="text/javascript">
				/* init Jarallax */
				$('.jarallax').jarallax({
					speed: 0.5,
					imgWidth: 1366,
					imgHeight: 768
				})
			</script>
<!-- //jarallax-js -->
					<!--banner Slider starts Here-->
						<script src="js/responsiveslides.min.js"></script>
							<script>
								// You can also use "$(window).load(function() {"
								$(function () {
								  // Slideshow 4
								  $("#slider3").responsiveSlides({
									auto: true,
									pager:true,
									nav:false,
									speed: 500,
									namespace: "callbacks",
									before: function () {
									  $('.events').append("<li>before event fired.</li>");
									},
									after: function () {
									  $('.events').append("<li>after event fired.</li>");
									}
								  });

								});
							 </script>

							<!--banner Slider starts Here-->


<!--light-box-files -->
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.chocolat.js"></script>
<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
<!--//light-box-files -->
		<script type="text/javascript">
		$(function() {
			$('.gallery a').Chocolat();
		});
		</script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!--//footer-section-->
<!-- Starts-Number-Scroller-Animation-JavaScript -->
<script type="text/javascript" src="js/numscroller-1.0.js"></script>
<!-- //Starts-Number-Scroller-Animation-JavaScript -->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear'
			};
		*/
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->


<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
</body>
</html>
