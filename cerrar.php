<?php
session_start();
if($_SESSION['Usuario']){
session_destroy();
header("Location: index.html");
}
else {
	header("location:indexinicio.php");
}
?>
