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

	<h1>Renta Un Auto Ahora Mismo </h1>
	<div class="w3ls-login">
		<!-- form starts here -->
		<form action="exitoso.php" method="POST">
			<div class="agile-field-txt">
				<label>
					Sucursal :</label>
					<select class="form-control" REQUIRED name="sucursal">
						<option value="">Sucursal</option>
							<option value="Toluca">Toluca</option>
							<option value="Zinacantepec">Zinacantepec</option>
							<option value="Lerma">Lerma</option>
							<option value="Metepec">Metepec</option>
							<option value="Atlacomulco">Atlacomulco</option>
					</select>
				</div>
			<div class="agile-field-txt">
				<label>
					Fecha De Inicio :</label>
					<input class="form-control" type="date" REQUIRED name="fecha_inicio">
			</div>
			<div class="agile-field-txt">
				<label>
					Fecha Final :</label>
					<input class="form-control" type="date" REQUIRED name="fecha_final">
			</div>
			<div class="agile-field-txt">
				<label>
					Galeria </label>
					<table class="formulario" width="50%">
						<tr>
							<td align="center"><a href="coches baja popup.html" target="popup"
								onClick="window.open(this.href, this.target, 'width=800px,height=600px'); return false;">
								Carros Economicos
							</a></td>
							<td align="center"><a href="coches mediana popup.html" target="popup"
								onClick="window.open(this.href, this.target, 'width=800px,height=600px'); return false;">
								Carros Estándar
							</a></td>
							<td align="center"><a href="coches alto popup.html" target="popup"
								onClick="window.open(this.href, this.target, 'width=800px,height=600px'); return false;">
								Carros de Lujo
							</a></td>
						</tr>
					</table>			</div>
			<div class="agile-field-txt">
				<label>
					Escoge El Carro A Rentar :</label>
					<select class="form-control" REQUIRED name="carros">
							<option value="">----Selecciona un Carro----</option>
							<option value="">----Coches Economicos----</option>
							<option value="Chevi 2012">Chevi 2012</option>
							<option value="Chevrolet Corsa">Chevrolet Corsa</option>
							<option value="Nissan Tsuru 2018">Nissan Tsuru 2018</option>
							<option value="Escarabajo 2003">Escarabajo 2003</option>
							<option value="Pointer 2008">Pointer 2008</option>
							<option value="Nissan Quest 2008">Nissan Quest 2008</option>
							<option value="Chrysler Voyager 2003">Chrysler Voyager 2003</option>
							<option value="Nissan NP300 2013">Nissan NP300 2013</option>
							<option value="">----Coches de Media----</option>
							<option value="Nissan March 2019">Nissan March 2019</option>
							<option value="Chevrolet Aveo 2018">Chevrolet Aveo 2018</option>
							<option value="Cavalier 2019">Cavalier 2019</option>
							<option value="Nissan Versa 2018">Nissan Versa 2018</option>
							<option value="Nissan Tida 2017">Nissan Tida 2017</option>
							<option value="Nissan Sentra 2018">Nissan Sentra 2018</option>
							<option value="Hyundai 2019">Hyundai 2019</option>
							<option value="Ford Lobo 2016">Ford Lobo 2016</option>
							<option value="">----Coches de Lujo----</option>
							<option value="BMW Z4 2018">BMW Z4 2018</option>
							<option value="BMW Serie 8 2018">BMW Serie 8 2018</option>
							<option value="BMW i8 2018">BMW i8 2018</option>
							<option value="Mustang 2018">Mustang 2018</option>
							<option value="Ford Mustang 2014">Ford Mustang 2014</option>
							<option value="Ford Explorer mói 2017">Ford Explorer mói 2017</option>
							<option value="Continental Sedán Premium">Continental Sedán Premium</option>
							<option value="BMW Serie 8 Coupé 2018">BMW Serie 8 Coupé 2018</option>
					</select>			</div>
			<div class="agile-field-txt">
				<label>
					Tipo de Pago :</label>
					<select class="form-control" REQUIRED name="pago">
						<option>Tipo de Pago</option>
							<option value="Tarjeta">Tarjeta</option>
							<option value="Efectivo">Efectivo</option>
					</select>			</div>
			<div class="agile-field-txt">
				<label>
					Motivo de la Renta :</label>
					<textarea class="form-control" REQUIRED name="motivo" placeholder="Escribe tu motivo"></textarea>
			</div>
			<div class="agile-field-txt">
				<label>
					password :</label>
				<input type="password" name="password" placeholder=" " required="" id="myInput" />
			</div>
			<div class="w3ls-login  w3l-sub">
				<input type="submit" value="Rentar">
			</div>
		</form>
	</div>

	<div class="pie">
		<p>© 2019 RentaCar . Derechos Reservados | Visita nuestras redes sociales<br>
		<a href="https://www.facebook.com">Facebook</a><br>
		<a href="https://www.twitter.com">Twitter</a><br>
		<a href="https://www.instagram.com">Instagram</a><br>
	</p>
	</div>
	<a href="#" class="ancla" style="display: block;"></a>
</body>
</html>
