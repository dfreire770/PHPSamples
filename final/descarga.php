<?php
	function descargar($file_name,$type)
	{
		header("Content-type: application/".$type);//Se especifica el archivo MIME
		header("Content-disposition: attachment; filename=".$file_name);//forza descarga
		header("Pragma: no-cache");//no guardar en cache
		echo file_get_contents($file_name);
	}
	function compress($directorio)
	{
		$zip = new ZipArchive();
		$filename = 'archivo.zip';
		if($zip->open($filename,ZIPARCHIVE::CREATE)===true)
		{
			$zip->addFile($directorio);
			$zip->close();
			return $filename;
		}
		else
		{
			exit();
		}
	}
	function xml_to_csv($directorio)
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

	function csv_to_xml($directorio)
	{
		$contenido = file_get_contents($directorio); 
		$fp = fopen('nuevo.xml', 'w');
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
		return 'nuevo.xml';
	} 
	
	if($_POST['opcion2']==1)//si desea encriptado
	{
		$directorio=$_POST['locacion2'];
		if($_POST['opcion']==1)
		{
			$file_name=compress($directorio);
			descargar($file_name,"zip");
		}
		else if($_POST['opcion']==2)
		{
			$file_name=xml_to_csv($directorio);
			descargar($file_name,"csv");
		}
		else if($_POST['opcion']==3)
		{
			$file_name=csv_to_xml($directorio);
			descargar($file_name,"xml");
		}
	}
	else if($_POST['opcion2']==2)//si desea sin encriptar	
	{
		$directorio=$_POST['dir'];
		if($_POST['opcion']==1)
		{
			$file_name=compress($directorio);
			descargar($file_name,"zip");
		}
		else if($_POST['opcion']==2)
		{
			$file_name=xml_to_csv($directorio);
			descargar($file_name,"csv");
		}
		else if($_POST['opcion']==3)
		{
			$file_name=csv_to_xml($directorio);
			descargar($file_name,"xml");
		}
	}
?>
