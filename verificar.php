<?php
session_start();
	$server="mysql.proyectostic.online";
  $username="alejandro6725825";
  $password="alejandro8356000";
  $db='rentacarbase';
	$con=mysqli_connect($server,$username,$password)or die("no se ha podido establecer la conexion");
	$sdb=mysqli_select_db($con,$db)or die("la base de datos no existe");
//include "../conexion.php";

$username=$_POST['email'];
$pass=$_POST['contrasena'];

 $sql2="SELECT * FROM administradores WHERE correo='$username'";

 $resultado = mysqli_query( $con, $sql2 ) or die ( "Algo ha ido mal en la consulta a la base");
	if($f2=mysqli_fetch_array($resultado)){
		if($pass==$f2['contrasena']){
			$_SESSION['id']=$f2['id_ad'];
			$_SESSION['Usuario']=$f2['correo'];
		    header("Location: public/indexadmin");
		    	echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';




		}
	}

 $sql="SELECT * FROM clientes WHERE correo='$username'";

 $resultado1 = mysqli_query( $con, $sql ) or die ( "Algo ha ido mal en la consulta a la base");
	if($f=mysqli_fetch_array($resultado1)){
		if($pass==$f['contrasena']){
			$_SESSION['id']=$f['id_cli'];
			$_SESSION['Usuario']=$f['correo'];


			header("Location: indexinicio.php");
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';

			header("Location: index.html");
		}
	}else{

		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
	}



?>
