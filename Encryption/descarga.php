<?php
	header("Content-type: application/csv");//Se especifica el archivo MIME
	header("Content-disposition: attachment; filename=nuevo.csv");//forza descarga
	header("Pragma: no-cache");//no guardar en cache
	echo file_get_contents("nuevo.csv");
?>