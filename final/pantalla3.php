<html>
	<head>
		<title>Metodo de Guardado</title>
	</head>
	<body bgcolor="#0099FF"> 
	<?php
		require("metodos.php");
		require("funciones.php");
		if($_POST['opcion']==1)
		{
			echo "<center>Utilizando SPL QUEUE<br/>";
			cola();
		}
		else if($_POST['opcion']==2)
		{
			echo "<center>Utilizando SPL Stack<br/>";
			pila();			
		}
		else if($_POST['opcion']==3)
		{
			echo "<center>Utilizando Listas Simple<br/>";
			lista();
		}
		else if($_POST['opcion']=4)
		{
			echo "<center>Utilizando Listas Doble<br/>";
			lista_doble();
		}	
		else if($_POST['opcion']==5)
		{
			echo "<center>Utilizando Listas Circular<br/>";
			lista_ciruclar();
		}	
	?>
	<form method="POST" action="descarga.php">
		<hr />
		<center>En que formato desea descargar? 
		<?php select(); ?>
		<input type="hidden" name="type" value="<?php echo ext($_POST['locacion']); ?>" />
		<center>Desea Encriptar la informacion?
		<select name="opcion2">
				<option value="1">Si</option>
				<option value="2">No</option>
		</select>
		<input type="hidden" name="dir" value="<?php echo $_POST['locacion']; ?>" />
		<input type="hidden" name="locacion2" value="<?php echo $_POST['locacion2']; ?>" />
		<center><input type="submit" value="Continuar" />
	</form>
	
	</body>
</html>