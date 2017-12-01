<?php
	function ext($dir)//nos indica la extesion del archivo
	{
		$extension = explode(".", $dir); 
		$tipo = end($extension); 		
		return $tipo;
	}
	function zip($dir)//verifica que tipo de archivo contiene el zip, para proceder a descomprimir
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
			csv($direccion,$opcion);
		}
		else if(ext($entries)=="xml")
		{
			descomprimir();
			xml($direccion,$opcion);
		}
		else
		{
			echo "El archivo contenido no es csv o xml<br/>";
			exit();
		}
		zip_close($zip);
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
	function formulario($dir)
	{
	?>
		<form method="POST" action="pantalla3.php">
		<hr />
		<center>Escoja el metodo de guardado:
		<select name="opcion">
		<center><br/>
			<option value="1">SPL Queue</option>
			<option value="2">SPL Stack</option>
			<option value="3">Lista Simple</option>
			<option value="4">Lista Doble Enlazada</option>
			<option value="5">Lista Circular</option>
			
		</select>
		<br />
		<input type="hidden" name="locacion" value="<?php echo $dir; ?>" />
		<input type="submit" value="Continuar" />
		</form>
	<?php	
	}
	function select()
	{
		$tipo=ext($_POST['locacion']);
		if($tipo=="csv")
		{?>
			<select name="opcion">
				<option value="1">zip</option>
				<option value="3">xml</option>
			</select>
		<?php
		}
		else if($tipo=="xml")
		{?>
			<select name="opcion">
				<option value="1">zip</option>
				<option value="2">csv</option>
			</select>
		<?php		
		}
	}
	function encriptar()//la funcion debe recibir una cadena y talvez la opcion si esta encriptada
	{
		$str = 'This is an encoded string';
		$enc=base64_encode($str)."<br>";
	}
	function desencriptar($contenido)
	{
		$resultado=base64_decode($contenido);
		return $resultado;		
	}
?>
