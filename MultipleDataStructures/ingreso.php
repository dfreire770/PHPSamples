<html>
	<head>
		<title>Ingreso</title>
	</head>
	<body>
		<center>Ingrese los datos: <br>
		<form method="POST" action="guardar.php">
		<?php
			for($i=0;$i<$_POST['numero'];$i++)
			{
			?>
				<input type="text" name="<?php echo "data".$i;?>"/><br>
			<?php
			}
		?>
		<select name="opcion">
			<option value="1">Lista Simple</option>
			<option value="2">Lista Doble</option>
			<option value="3">Lista Circular</option>
		</select>
		<input type="hidden" name="elemento" value="<?php echo $_POST['numero'];?>"/>
		<input type="submit" value="Continuar"/>
		</form>
	</body>
</html>