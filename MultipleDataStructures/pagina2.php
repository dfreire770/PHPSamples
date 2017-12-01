<html>
	<head>
		<title>Pagina2</title>
	</head>
	<body>
	<center>Ingrese los Datos
	<form method="POST" action="pagina3.php">
	<?php
		for($i=0;$i<$_POST['numero'];$i++)
		{
		?>
			<input type="text" name="<?php echo "data".$i; ?>" /><br />
		<?php
		}
	?>
		<select name="opcion">
			<option value="1">SPL Stack</option>
			<option value="2">SPL Queue</option>
			<option value="3">Lista Simple</option>
			<option value="4">Lista Doble</option>
			<option value="5">Lista Circular</option>
		</select>
		<input type="hidden" name="elemento" value="<?php echo $_POST['numero']?>"/></br>
		<input type="submit" value="Continuar"/>
	</form>
	</body>
</html>

