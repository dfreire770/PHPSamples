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
		function xml_to_csv($filename)
		{
			$xml = simplexml_load_file($filename);
			$outstream = fopen('nuevo.csv','w');
			$header=false;
			foreach($xml as $k=>$details)
			{
				if(!$header)
				{
					fputcsv($outstream,array_keys(get_object_vars($details)));
					$header=true;
				}
				fputcsv($outstream,get_object_vars($details));
			}
			fclose($outstream);
			return 'nuevo.csv';
		}

		function csv_to_xml($directorio)
		{
			$contenido = file_get_contents("cuentas.csv");
			$fp = fopen('nuevo.xml', 'w');
			fwrite($fp, $contenido."\n");
			fclose($fp);
			return 'nuevo.xml';
		} 
		$directorio=$_POST['direccion'];
		if($_POST['op']==1)
		{
			$file_name=compress($directorio);
			descargar($file_name,"zip");
			
		}
		else if($_POST['op']==2)
		{
			$file_name=xml_to_csv($directorio);
			descargar($file_name,"csv");
		}
		else if($_POST['op']==3)
		{
			$file_name=csv_to_xml($directorio);
			descargar($file_name,"xml");
		}
?>
