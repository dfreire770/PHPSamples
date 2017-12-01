<html>
	<head>
		<title>Lectura</title>
	</head>
	<body bgcolor="#0099FF"> 
	<?php
		$dir=$_POST['path'];
		$contenido = file_get_contents($dir);
		$arreglo_datos = explode("\n", $contenido);
		$fp = fopen('desencriptado.csv', 'w');
		?>

		<table width="300" border="1" cellspacing="5" style=" background-color:#CCFFFF">
		<?php
		for($i=0;$i<count($arreglo_datos)-1;$i++)
		{
			$arreglo = explode(";", $arreglo_datos[$i]);
			?>
			<tr>		
			<?php for($j=0;$j<count($arreglo);$j++)
			{
			?>
			<td><?php echo $resultado=base64_decode($arreglo[$j]);
			fwrite($fp, $resultado[$j].",\n");?></td>
			<?php
			}
			?>
			</tr>	
		<?php
		}
		?>
		</table>
		<?php
		fclose($fp);
	?>
	</body>
	</html>