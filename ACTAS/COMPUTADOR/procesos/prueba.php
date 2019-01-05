<?php  

	$valor = $_GET['numero'];
     
	$variable= $valor;
	$palabra1 = substr($variable,-5);
	$palabra2 = substr($variable,-11,5);

	$numeroTicket= $palabra2."". $palabra1;
	echo $numeroTicket;
?>


