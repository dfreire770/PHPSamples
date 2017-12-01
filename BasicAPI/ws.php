<?php
	require('lib/nusoap.php');
	$server = new nusoap_server;
	$server->register('mi_funcion');
	function mi_funcion($direccion)
	{
		$result=file_get_contents($direccion);
		return $result;
	}
	$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA)
	? $HTTP_RAW_POST_DATA : '';
	$server->service($HTTP_RAW_POST_DATA);
?>