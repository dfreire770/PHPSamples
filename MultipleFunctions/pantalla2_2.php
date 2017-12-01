<?php
//$direccion="http://192.168.1.219/andres/api.php?fajowe585oja309s=HJKfsdlkfe67894278ldas43";


	if($_POST['path']==null)
	{
		echo "No ha ingresado los datos requeridos";
	}
	else if($_POST['path']!=null)
	{
		if($_POST['elemento1']!=null)
		{
			if($_POST['elemento2']!=null)
			{
				$direccion="http://".$_POST['path']."?".$_POST['elemento1']."=".$_POST['elemento2'];
			}
		}
		else if($_POST['elemento1']==null)
		{
			if($_POST['elemento2']==null)
			{
				$direccion="http://".$_POST['path'];
			}
		}
	?>
		<center><table border="1" bordercolor="#999999" cellspacing="0" cellpadding="3">
		<tr>
		<td>
		NOMBRE
		</td>
		<td>
		TEL&Eacute;FONO
		</td>
		</tr>
		<?php
		for($i=0; $i<count($direccion); $i++)
		{
			$datos = simplexml_load_file($direccion);
			
				for($j=0; $j<count($datos->persona); $j++)
				{
			?>
				<tr>
				<?php
						echo "<td>".$datos->persona[$j]->nombre."</td>";
						echo "<td>".$datos->persona[$j]->telefono."</td>";
				?>
				</tr>
			<?php
				}   
		}
		?>
		</table><br>
	<?php
	?>
	<form method="POST" action="download.php">
		<hr />
		<center>En que formato desea descargar? 
		<select name="opcion2">
				<option value="1">zip</option>
				<option value="2">csv</option>
		</select>
		<input type="hidden" name="type" value="xml" />
		<input type="hidden" name="dir" value="<?php echo $_POST['path']; ?>" />
		<center><input type="submit" value="Descargar" />
	</form>
	<?php
	
	
	
	}
?>
