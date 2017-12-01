<?php
	require_once('lib/nusoap.php');
	$client = new nusoap_client('http://localhost/api/ws.php', false);
	$result = $client->call('mi_funcion',  array('personas.xml'));
	echo $result;
?>