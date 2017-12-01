<html>
	<head>
		<title> Ingreso de Elementos </title>
	</head>
	<body>
		
        <center>Ingrese su los elementos<br /><br />
		
		<form method="POST" action="metodos.php">
		
		<?php for($i=0; $i<$_POST['dato'];$i++){
		?>
			<input type="text" name="dato"<?php echo $i; ?>"/><br />
			<?php
			}
			?>
		<br />
		<center>2. Escoja el metodo:
		<select name="opcion">
			<option value="1">Seleccion</option>
			<option value="2">Shakersort</option>
			<option value="3">Burbuja</option>
			<option value="4">Insercion</option>
		</select>
		<br />
		<br />
	<input type="submit" value="Continuar" /><br />
	<input name="dato" type="hidden" value="<?php echo $_POST['dato'];?>" /><br />
	
	</form>
	</body>
</html>