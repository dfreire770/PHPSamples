<html>
	<head>
		<title>Lectura</title>
	</head>
	<body bgcolor="#0099FF"> 
	<?php
		$dir=$directorio;
		$contenido = file_get_contents($dir);
		$arreglo_datos = explode("\n", $contenido);
		$file_name1="csv_encriptado.csv";
		$fp = fopen($file_name1, 'w');
		$i=0;
		$j=0;
		for($i=0;$i<count($arreglo_datos)-1;$i++)
		{
			$arreglo = explode(";", $arreglo_datos[$i]);
			for($j=0;$j<count($arreglo);$j++)
			{	
				$resultado=base64_encode($arreglo[$j]).";";
				fwrite($fp, $resultado);
				$j=$j+1;
				$resultado=base64_encode($arreglo[$j])."\n";
				fwrite($fp, $resultado);
			}
		}
		fclose($fp);
	?>