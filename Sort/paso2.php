<html>
	<head>
		<title>PASO 2</title>
	</head>
		<body>
		<?php
			if(is_numeric($_POST['elemento1'])==false)
			{
				echo "<center>Debe ingresar un numero para continuar</br>" ;
				echo "<center><a href=http://localhost/ordenamiento/paso1.html>Haga Click aqui para continuar</a>";
				exit;
			
			}
			else if($_POST['elemento1']< 1)
			{
				echo "<center>Debe ingresar un numero mayor a cero para continuar</br>" ;
				echo "<center><a href=http://localhost/ordenamiento/paso1.html>Haga Click aqui para continuar</a>";
				exit;
			}
			?>
			
		<center>1. Ingrese los elementos<br />
	
	<form method="POST" action="metodos.php">
		<?php for($i=0;$i<$_POST['elemento1'];$i++)
		{?>
			<input type="text" name="<?php echo "data".$i; ?>" /><br />
		<?php
		}
		?>
		<hr />
	<center>2. Escoja el metodo:<br/>
		<select name="opcion">
			<option value="1">Seleccion</option>
			<option value="2">Shakersort</option>
			<option value="3">Burbuja</option>
			<option value="4">Insercion</option>
		</select>
		<br />
	<input type="hidden" name="elemento" value="<?php echo $_POST['elemento1']; ?>" />
	<input type="submit" value="Continuar" />
</form>