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
	<title>Contacto</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util1.css">
	<link rel="stylesheet" type="text/css" href="css/main1.css">
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
<!--===============================================================================================-->
</head>
<body>
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
							<a  href="indexinicio.php"><img src="images/logo.jpg" width="180px" height="110px" alt="Logo"></a>
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

		<div class="container-contact100">
		  <div class="wrap-contact100">
		    <form class="contact100-form validate-form" action="mailto:al221810632@gmail.com">
		      <span class="contact100-form-title">
		        Dinos Lo Que Opinas
		      </span>

		      <label class="label-input100" for="first-name">Dinos Tu Nombre *</label>
		      <div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Type first name">
		        <input id="first-name" class="input100" type="text" name="first-name" placeholder="Nombre">
		        <span class="focus-input100"></span>
		      </div>
		      <div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Type last name">
		        <input class="input100" type="text" name="last-name" placeholder="Apellidos">
		        <span class="focus-input100"></span>
		      </div>

		      <label class="label-input100" for="email">Ingresa Tu Correo Electrónico *</label>
		      <div class="wrap-input100 validate-input" data-validate = "Email Válido Requerido: ex@abc.xyz">
		        <input id="email" class="input100" type="text" name="email" placeholder="Ej. ejemplo@email.com">
		        <span class="focus-input100"></span>
		      </div>

		      <label class="label-input100" for="phone">Ingresa Tu Numero De Telefono</label>
		      <div class="wrap-input100">
		        <input id="phone" class="input100" type="text" name="phone" placeholder="Ej. +52 722 140 4846">
		        <span class="focus-input100"></span>
		      </div>

		      <label class="label-input100" for="message">Mensaje *</label>
		      <div class="wrap-input100 validate-input" data-validate = "Message is required">
		        <textarea id="message" class="input100" name="message" placeholder="Write us a message"></textarea>
		        <span class="focus-input100"></span>
		      </div>

		      <div class="container-contact100-form-btn">
		        <button class="contact100-form-btn">
		          Enviar Mensaje
		        </button>
		      </div>
		    </form>

		    <div class="contact100-more flex-col-c-m" style="background-image: url('images/bg-01.jpg');">
		      <div class="flex-w size1 p-b-47">
		        <div class="txt1 p-r-25">
		          <span class="lnr lnr-map-marker"></span>
		        </div>

		        <div class="flex-col size2">
		          <span class="txt1 p-b-20">
		            Toluca
		          </span>

		          <span class="txt2">
		            Av. Miguel Hidalgo
		          No. 1307 C, Reforma
		          </span>
		        </div>
		      </div>

		      <div class="flex-w size1 p-b-47">
		        <div class="txt1 p-r-25">
		          <span class="lnr lnr-map-marker"></span>
		        </div>

		        <div class="flex-col size2">
		          <span class="txt1 p-b-20">
		            ZINACANTEPEC
		          </span>

		          <span class="txt2">
		            CALLE JARDIN CONSTITUCIÓN 101 S/N COLONIA CENTRO ZINACANTEPEC ESTADO DE MÉXICO C.P. 51350
		          </span>
		        </div>
		      </div>

		      <div class="flex-w size1 p-b-47">
		        <div class="txt1 p-r-25">
		          <span class="lnr lnr-map-marker"></span>
		        </div>

		        <div class="flex-col size2">
		          <span class="txt1 p-b-20">
		            LERMA
		          </span>

		          <span class="txt2">
		            BLVD A. MIGUEL ALEMAN NO. 160 LOCAL 20 ZONA INDUSTRIAL LERMA
		          </span>
		        </div>
		      </div>

		      <div class="flex-w size1 p-b-47">
		        <div class="txt1 p-r-25">
		          <span class="lnr lnr-map-marker"></span>
		        </div>

		        <div class="flex-col size2">
		          <span class="txt1 p-b-20">
		            METEPEC
		          </span>

		          <span class="txt2">
		            Vialidad Metepec # 554
		              Esq Leona Vicario,
		              La Purisima
		          </span>
		        </div>
		      </div>

		      <div class="flex-w size1 p-b-47">
		        <div class="txt1 p-r-25">
		          <span class="lnr lnr-map-marker"></span>
		        </div>

		        <div class="flex-col size2">
		          <span class="txt1 p-b-20">
		            ATLACOMULCO
		          </span>

		          <span class="txt2">
		            JORGE JIMENEZ CANTU No. 1288
		            50450 - ATLACOMULCO
		          </span>
		        </div>
		      </div>

		      <div class="dis-flex size1 p-b-47">
		        <div class="txt1 p-r-25">
		          <span class="lnr lnr-phone-handset"></span>
		        </div>

		        <div class="flex-col size2">
		          <span class="txt1 p-b-20">
		            Telefonos de contacto
		          </span>

		          <span class="txt3">
		            +52 722 428 2570
		            <br>
		            +52 722 434 6499
		            <br>
		            +52 722 894 2266
		            <br>
		            +52 729 151 9340
		            <br>
		            +52 729 139 5219
		          </span>
		        </div>
		      </div>

		      <div class="dis-flex size1 p-b-47">
		        <div class="txt1 p-r-25">
		          <span class="lnr lnr-envelope"></span>
		        </div>

		        <div class="flex-col size2">
		          <span class="txt1 p-b-20">
		            Soporte General
		          </span>

		          <span class="txt3">
		            rentacar@gmail.com
		          </span>
		        </div>
		      </div>
		    </div>
		  </div>
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
