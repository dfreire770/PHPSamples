<?php
	/*$filename='cuentas.csv';
	function xml_to_csv($filename)
	{
		$xml = simplexml_load_file($filename);
		$outstream = fopen('nuevo.csv','w');
		$header=false;
		foreach($xml as $k=>$details)
		{
			if(!$header)
			{
				fputcsv($outstream,array_keys(get_object_vars($details)),';', '"');
				$header=true;
			}
			fputcsv($outstream,get_object_vars($details),';', '"');
		}
		fclose($outstream);
		return 'nuevo.csv';
	}
	//xml_to_csv($filename);*/

	//$csv = file("cuentas.csv");
	$contenido = file_get_contents("cuentas.csv");
	//$csv = file("cuentas.csv"); //Se guarda en la variable $csv el archivo .csv que se quiero convertir a xml 
	$fp = fopen('transformado.xml', 'w');
	$cadena = "<tagpadre>\n";
	$data = explode("\n", $contenido);
	for($i=0;$i<count($data);$i++)
	{
		$data1=explode(";", $data[$i]);
		for($j=0;$j<count($data1);$j++)
		{
			$cadena .= "	<xmltag>".$data1[$j]."	</xmltag>\n";
		}
	}
	$cadena .= "</tagpadre>";
	fwrite ($fp,$cadena);
	fclose($fp);
	
?>
