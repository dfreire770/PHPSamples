<html>
	<head>
		<title>PASO FINAL</title>
	</head>
	<?php
		require("lista.php");
		
		$mi_lista = new lista();
		for($i=0;$i<$_POST['elemento'];$i++)
		{
			$mi_lista->insertar_elemento($_POST['data'.$i], $i);
			$mi_lista->cont($i);
		}
		$mi_lista->imprimir();
	?>
	
	<center>Ingrese mas elementos<br />
	
	<form method="POST" action="final.php">
		<center>Dato
		<center><input type="text" name="elemento" /> <br />
		<center>Posicion
		<center><input type="text" name="posicion" /> <br />
		<br /><input type="submit" value="Continuar" />
	</form>
</html>