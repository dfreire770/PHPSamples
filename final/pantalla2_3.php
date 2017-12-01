<?php
	require_once('lib/nusoap.php');
	$client = new nusoap_client('http://localhost/final/ws.php', false);
	$result = $client->call('api',
		array('param' => 'abc'));
	print_r($result);
?>