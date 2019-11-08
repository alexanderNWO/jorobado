<?php
                        $sucursal = $_POST['sucursal'];
                    $fecha_inicio = $_POST['fecha_inicio'];
                    $fecha_final = $_POST['fecha_final'];
                    $carros = $_POST['carros'];
                    $motivo = $_POST['motivo'];
                    $lugar = $_POST['lugar'];
                    $pago = $_POST['pago'];
                    ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Datos del Usuario</title>
	<meta charset="UTF-8">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" type="text/css" href="css/estilos3.css">
	<link href="css/estilo menu.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
	<div class="encabezado-texto">
		<div class="Encabezado">
			<table width="100%">
				<tr>
					<td><a href="indexinicio.html"><img src="images/logo.jpg" height="150px" width="250px"></a></td>
					<td><h1><a href="indexinicio.html">RENTACAR</a></h1></td>
				</tr>
			</table>
		</div>
	</div>

	<div>
			<ul class="barra-navegacion">
				<li><a href="indexinicio.html">INICIO</a></li>
				<li><a href="">¿QUIENES SOMOS?</a>
					<ul>
						<li><a href="mision inicio.html">Mision</a></li>
						<li><a href="vision inicio.html">Vision</a></li>
					</ul></li>
				<li><a href="">RENTA UN AUTO</a>
					<ul>
						<li><a href="coches baja inicio.html">Carros Economicos</a></li>
						<li><a href="coches mediana inicio.html">Carros de Media</a></li>
						<li><a href="coches alto inicio.html">Carros de Lujo</a></li>
					</ul></li>
				<li><a href="rentas.php">REGISTRO(RENTAS)</a></li>
				<li><a href="contacto inicio.html">CONTACTANOS</a></li>
				<li><a href="ubicacion inicio.html">UBICACION</a></li>
			</ul>
		</div>

	<div class="contenedor">
		<div class="contacto">
		<div class="formulario-forma">
				<div class="titulo">
          <?php
          $servername="mysql.proyectostic.online";
          $username="alejandro6725825";
          $password="alejandro8356000";
          $dbname='rentacarbase';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO renta (fecha_inicio, fecha_final, tipopago, motivo, lugar_est, coche, sucursal)
VALUES ('$fecha_inicio', '$fecha_final', '$pago', '$motivo', '$lugar', '$carros', '$sucursal')";

if ($conn->query($sql) === TRUE) {
$id = $conn->insert_id;

echo "Datos Ingresados";

} else {
echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
				</div>

				<font color="white"><h2>Sucursal: <?php echo $sucursal;?> <br><br>
                  Fecha de Inicio: <?php echo $fecha_inicio;?><br><br>
                Fecha Final: <?php echo $fecha_final;?><br><br>
                    Carro: <?php if($carros == "Chevi 2012"){
                            echo $carros;
                            print "<br><img src=\"images/baratos1.png\">";
                        }
                    elseif($carros == "Chevrolet Corsa"){
                            echo $carros;
                            print "<br><img src=\"images/baratos2.png\">";
                        }
                    elseif($carros == "Nissan Tsuru 2018"){
                            echo $carros;
                            print "<br><img src=\"images/baratos3.png\">";
                        }
                    elseif($carros == "Escarabajo 2003"){
                            echo $carros;
                            print "<br><img src=\"images/baratos4.png\">";
                        }
                    elseif($carros == "Pointer 2008"){
                            echo $carros;
                            print "<br><img src=\"images/baratos5.png\">";
                        }
                    elseif($carros == "Nissan Quest 2008"){
                            echo $carros;
                            print "<br><img src=\"images/baratos6.png\">";
                        }
                    elseif($carros == "Chrysler Voyager 2003"){
                            echo $carros;
                            print "<br><img src=\"images/baratos7.png\">";
                        }
                    elseif($carros == "Nissan NP300 2013"){
                            echo $carros;
                            print "<br><img src=\"images/baratos8.png\">";
                        }
                    elseif($carros == "Nissan March 2019"){
                            echo $carros;
                            print "<br><img src=\"images/estandar1.png\">";
                        }
                    elseif($carros == "Chevrolet Aveo 2018"){
                            echo $carros;
                            print "<br><img src=\"images/estandar2.png\">";
                        }
                    elseif($carros == "Cavalier 2019"){
                            echo $carros;
                            print "<br><img src=\"images/estandar3.png\">";
                        }
                    elseif($carros == "Nissan Versa 2018"){
                            echo $carros;
                            print "<br><img src=\"images/estandar4.png\">";
                        }
                    elseif($carros == "Nissan Tida 2017"){
                            echo $carros;
                            print "<br><img src=\"images/estandar5.png\">";
                        }
                    elseif($carros == "Nissan Sentra 2018"){
                            echo $carros;
                            print "<br><img src=\"images/estandar6.png\">";
                        }
                    elseif($carros == "Hyundai 2019"){
                            echo $carros;
                            print "<br><img src=\"images/estandar7.png\">";
                        }
                    elseif($carros == "Ford Lobo 2016"){
                            echo $carros;
                            print "<br><img src=\"images/estandar8.png\">";
                        }
                    elseif($carros == "BMW Z4 2018"){
                            echo $carros;
                            print "<br><img src=\"images/lujo1.png\">";
                        }
                    elseif($carros == "BMW Serie 8 2018"){
                            echo $carros;
                            print "<br><img src=\"images/lujo2.png\">";
                        }
                    elseif($carros == "BMW i8 2018"){
                            echo $carros;
                            print "<br><img src=\"images/lujo3.png\">";
                        }
                    elseif($carros == "Mustang 2018"){
                            echo $carros;
                            print "<br><img src=\"images/lujo4.png\">";
                        }
                    elseif($carros == "Ford Mustang 2014"){
                            echo $carros;
                            print "<br><img src=\"images/lujo5.png\">";
                        }
                    elseif($carros == "Ford Explorer mói 2017"){
                            echo $carros;
                            print "<br><img src=\"images/lujo6.png\">";
                        }
                    elseif($carros == "Continental Sedán Premium"){
                            echo $carros;
                            print "<br><img src=\"images/lujo7.png\">";
                        }
                    elseif($carros == "BMW Serie 8 Coupé 2018"){
                            echo $carros;
                            print "<br><img src=\"images/lujo8.png\">";
                        }?><br><br>
                Motivo: <?php echo $motivo;?><br><br>
                Lugar <?php echo $lugar; ?><br><br>
                    Datos Ingresados
                    </h2></font>
				<div class="registros">
				    <a href="indexinicio.php">Regresar</a>
				</div>
			</div>

		</div>
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
