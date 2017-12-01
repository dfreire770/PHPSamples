<?php
	require_once('lib/nusoap.php');
	$client = new nusoap_client('http://localhost/api/ws.php', false);
	$direccion=$_POST['path'];
	$result = $client->call('mi_funcion',  array($direccion));
	echo $result;
?>