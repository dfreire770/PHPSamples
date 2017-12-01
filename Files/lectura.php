<html>
	<head>
		<title>validacion y lectura</title>
	</head>
		<body>
		<body bgcolor="#0099FF">
		
		<?php
		function ext($dir)
		{
			$extension = explode(".", $dir); 
			$tipo = end($extension); 
			echo "<center>La extension del documento es .".$tipo."<center><br>";		
			return $tipo;
		}
		function formulario($dir)
		{
		?>
			<form method="POST" action="guardar.php">
			<hr />
			<select name="opcion">
			<center>Escoja el metodo de guardado:<br/>
				<option value="1">SPL Queue</option>
				<option value="2">SPL Stack</option>
				<option value="3">Lista</option>
			</select>
			<br />
			<input type="hidden" name="locacion" value="<?php echo $dir; ?>" />
			<input type="submit" value="Continuar" />
			</form>
		<?php	
		}
		function csv ($dir)
		{
			$contenido = file_get_contents($dir);
			$arreglo_datos = explode("\n", $contenido);?>
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
				<td><?php echo $arreglo[$j];?></td>
				<?php
				}
				?>
				</tr>	
			<?php
			}
			?>
			</table>
			<?php
			formulario($dir);
		}
		
		function xml($dir)
		{
			$contenido = file_get_contents($dir);
			$arreglo_datos = explode("\n", $contenido);
			?>
			<table width="300" border="1" cellspacing="5" style=" background-color:#CCFFFF">
			<?php
			for($i=0;$i<count($arreglo_datos);$i++)
			{
				$arreglo = explode(";", $arreglo_datos[$i]);
				?>
				<tr>		
				<?php for($j=0;$j<count($arreglo);$j++)
				{
				?>
				<td><?php echo $arreglo[$j];?></td>
				<?php
				}
				?>
				</tr>
				<?php
			}
			?></table>
			<?php
			formulario($dir);
		}
		
		function descomprimir()
		{
			$zip = new ZipArchive;
			if ($zip->open($_POST['path']) === TRUE) 
			{
				$zip->extractTo('.');
				$zip->close();
				echo "Descompresion exitosa";
			} 
			else 
			{
				echo "Error";
			}
		}
		
		function zip($dir)
		{
			$zip = zip_open($dir);
			while ($entry = zip_read($zip))
			{
				$entries = zip_entry_name($entry);
				echo "El documento contenido es: ".$entries;
				echo "<br/>";
			}
			$direccion=$entries;
			if(ext($entries)=="csv")
			{
				descomprimir();
				csv($direccion);
			}
			else if(ext($entries)=="xml")
			{
				descomprimir();
				xml($direccion);
			}
			else
			{
				echo "El archivo contenido no es csv o xml<br/>";
				exit();
			}
			zip_close($zip);
		}
			
		if($_POST['path']!=null)
		{
			$dir = $_POST['path'];
			$tipo = ext($dir);
			if($tipo == "csv")
			{
				csv($dir);
			}
			else if($tipo== "xml")
			{
				xml($dir);
			}
			else if($tipo=="zip")
			{
				zip($dir);
			}
			else
			{
				echo "Debe ingresar un documento XML, CSV o ZIP";
				exit();
			}
		}
		else
		{
			echo "Debe ingresar un documento";
		}
		?>
</body>
</html>