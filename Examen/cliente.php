<?php

$params = array(
			'uri'=>'http://localhost:8181/examen2/',
			'location'=>'http://localhost:8181/examen2/servicioLeer.php'
			);

$client = new SOAPClient(null,$params);

echo $client->leer();

?>

