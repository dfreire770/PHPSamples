<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tabla CSV</title>
</head>

<body>
<body bgcolor="#0099FF"> 

<table width="300" border="1" cellspacing="5" style=" background-color:#CCFFFF">
<?php
	if($_POST['opcion2']==1)
	{
		$contenido = file_get_contents($_POST['dir']);
		$arreglo_datos = explode("\n", $contenido);
		echo $_POST['type'];
		$fp = fopen('nuevo'.$_POST['type'], 'w');
		for($i=0;$i<count($arreglo_datos)-1;$i++)
		{
			$arreglo = explode(";", $arreglo_datos[$i]);
				?>
				<tr>
				<?php for($j=0;$j<count($arreglo);$j++)
				{
				?>
				<td><?php echo $cadena_crypt = crypt($arreglo[$j]);
				fwrite($fp, $cadena_crypt.",\n");?></td>
				<?php
				}
				?>
				</tr>
		<?php
		}
		fclose($fp);
	}
	else if($_POST['opcion2']==2)
	{
		echo "Presione el boton para continuar";
	}
?>
</table>
	<form method="POST" action="descarga.php">
	<hr />
	<input type="hidden" name="op" value="<?php echo $_POST['opcion']; ?>" />
	<input type="hidden" name="direccion" value="<?php echo $_POST['dir']; ?>" />
	<input type="submit" value="Descargar" />
	</form>
</body>
</html>
	
	
