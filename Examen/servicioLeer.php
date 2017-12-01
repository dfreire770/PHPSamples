<?php

class mensajes{
	
	function leer(){
		
		$database =mysql_connect('127.0.0.1:3306', 'root', '') or die('Could not connect: ' . mysql_error()); 
		mysql_select_db('examen') or die('Could not select database');
	 
		$query = "SELECT * FROM alerta ORDER BY FECHA DESC ";
		$result = mysql_query($query) or die('Query failed: ' . mysql_error());
	 
		$num_results = mysql_num_rows($result);  
	 
		for($i = 0; $i < $num_results; $i++)
		{
			 $row = mysql_fetch_array($result);
			 return $row['ID'] . "\t" . $row['Color'] ."\n";
		}
		 
		
	
	}

}
$params = array(
			'uri'=>'http://localhost:8181/examen2/',
			'location'=>'http://localhost:8181/examen2/servicioLeer.php'
			);
$server = new SOAPSERVER(null, $params);
$server->setObject(new mensajes());
$server->handle();


?>