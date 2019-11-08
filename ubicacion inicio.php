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

<title>Ubicacion</title>
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
						<a  href="index.html"><img src="images/logo.jpg" width="180px" height="110px" alt="Logo"></a>
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
							<li><a href="contacto inicio.php" class=>CONTACTANOS</a></li>
							<li><a href="ubicacion inicio.php" class=>UBICACION</a>
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

  <center>
  <div>
  		<div>
  					<br><br><br><br><h2 align="center">VISITANOS EN NUESTRAS 5 SUCURSALES<br><br>
  						TOLUCA
  					</h2>
  					<div>
  						<p>Av. Miguel Hidalgo
  						No. 1307 C, Reforma</p>
  						<div>
  							<p>+52 722 428 2570</p>
  						</div>
  					</div>
  				</div>
  <center>
  		<div>
  				<h3>Mapa</h3>
  		<div>

  		</div>
  			<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1BM5ozdrvxi290g7BfLkcW_-cejh5Vc17" width="640" height="480"></iframe>
  		</div>
  		</center><br><br>

  				<div>
  					<h2>
  						ZINACANTEPEC
  					</h2>
  					<div>
  						<p>CALLE JARDIN CONSTITUCIÓN 101 S/N COLONIA CENTRO ZINACANTEPEC ESTADO DE MÉXICO C.P. 51350</p>
  						<div>
  							<p>+52 722 434 6499</p>
  						</div>
  					</div>
  				</div>
  				<center>
  		<div>
  				<h3>Mapa</h3>
  		<div>

  		</div>
  			<iframe src="https://www.google.com/maps/d/u/0/embed?mid=116IVvVXPK957NkdBIJJto_cs9s2bI5yG" width="640" height="480"></iframe>
  		</div>
  		</center><br><br>

  				<div>
  					<h2 align="center">
  						LERMA
  					</h2>
  					<div>
  						<p>BLVD A. MIGUEL ALEMAN NO. 160 LOCAL 20 ZONA INDUSTRIAL LERMA</p>
  						<div>
  							<p>+52 722 894 2266</p>
  						</div>
  					</div>
  				</div>
  				<center>
  		<div>
  				<h3>Mapa</h3>
  		<div>

  		</div>
  			<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1feML5NMrRSNKcyeUndlpnXy1y6yNSsh3" width="640" height="480"></iframe>
  		</div>
  		</center><br><br>

  				<div>
  					<h2 align="center">
  						METEPEC
  					</h2>
  					<div>
  						<p>Vialidad Metepec # 554
  							Esq Leona Vicario,
  							La Purisima
  						</p>
  						<div>
  							<p>+52 729 151 9340</p>
  						</div>
  					</div>
  				</div>
  				<center>
  		<div>
  				<h3>Mapa</h3>
  		<div>

  		</div>
  			<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1bdO2GwAiNKy6h_C55gIS-jdMMaVQwN5N" width="640" height="480"></iframe>
  		</div>
  		</center><br><br>

  				<div>
  					<h2 align="center">
  						ATLACOMULCO
  					</h2>
  					<div>
  						<p>JORGE JIMENEZ CANTU No. 1288
  						50450 - ATLACOMULCO</p>
  						<div>
  							<p>+52 729 139 5219<br><br></p>
  						</div>
  					</div>
  				</div>
  				<center>
  		<div>
  				<h3>Mapa</h3>
  		<div>

  		</div>
  			<iframe src="https://www.google.com/maps/d/u/0/embed?mid=1857P8ebLkcwAtTyycNZEg3n9G2heQ2LA" width="640" height="480"></iframe>
  		</div>
  	</center><br><br><br><br>
  </div>

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
