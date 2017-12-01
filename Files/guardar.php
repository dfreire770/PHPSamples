<html>
	<head>
		<title>Pila o Cola</title>
	</head>
	
	<body>
	<body bgcolor="#0099FF"> 
	<?php
		require("lista.php");
		if($_POST['opcion']==1)
		{
			echo "<center>Utilizando SPL QUEUE<br/>";
			$cola = new SplQueue();
			$contenido = file_get_contents($_POST['locacion']);
			$arreglo_datos = explode("\n", $contenido);
			for($i=0;$i<count($arreglo_datos)-1;$i++)
			{
				$arreglo = explode(";", $arreglo_datos[$i]);
				for($j=0;$j<count($arreglo);$j++)
				{
					$cola->enqueue($arreglo[$j]);
				}
			}
			for($i=0;$i<count($arreglo_datos)-1;$i++)
			{
				for($j=0;$j<count($arreglo);$j++)
				{
					echo $cola->dequeue()."<br/>";
				}
			}
		}
		else if($_POST['opcion']==2)
		{
			echo "<center>Utilizando SPL Stack<br/>";
			$stack = new SplStack();
			$contenido = file_get_contents($_POST['locacion']);
			$arreglo_datos = explode("\n", $contenido);
			for($i=0;$i<count($arreglo_datos)-1;$i++)
			{
				$arreglo = explode(";", $arreglo_datos[$i]);
				for($j=0;$j<count($arreglo);$j++)
				{
					$stack->push($arreglo[$j]);
				}
			}
			foreach( $stack as $s )
			{
				echo $stack->pop()."<br/>";
			}
		}
		else if($_POST['opcion']==3)
		{
			echo "<center>Utilizando Listas<br/>";
			$mi_lista = new lista();
			$contenido = file_get_contents($_POST['locacion']);
			$arreglo_datos = explode("\n", $contenido);
			for($i=0;$i<count($arreglo_datos)-1;$i++)
			{
				$arreglo = explode(";", $arreglo_datos[$i]);
				for($j=0;$j<count($arreglo);$j++)
				{
					$mi_lista->insertar_elemento($arreglo[$j], $i);
				}
				$mi_lista->imprimir();
			}
		}	
	?>
	<form method="POST" action="funcion.php">
		<hr />
		<center>En que formato desea descargar?</br>
		<input type="hidden" name="dir" value="<?php echo $_POST['locacion']; ?>" />
		<input type="hidden" name="type" value="<?php echo ext($_POST['locacion']); ?>" />
		<?php select(); ?>
		<center>Desea Encriptar la informacion?<br/>
		<input type="hidden" name="dir" value="<?php echo $_POST['locacion']; ?>" />
		<select name="opcion2">
			<center><br/>
				<option value="1">Si</option>
				<option value="2">No</option>
			</select>
		<center><input type="submit" value="Continuar" />
	</form>
	
	
	<?php
	
	function ext($dir)
	{
		$extension = explode(".", $dir); 
		$tipo = end($extension); 
		return $tipo;
	}
	function select()
	{
		$tipo=ext($_POST['locacion']);
		if($tipo=="csv")
		{?>
			<select name="opcion">
			<center>Escoja el metodo de guardado:<br/>
				<option value="1">zip</option>
				<option value="3">xml</option>
			</select>
		<?php
		}
		else if($tipo=="xml")
		{?>
			<select name="opcion">
			<center>Escoja el metodo de guardado:<br/>
				<option value="1">zip</option>
				<option value="2">csv</option>
			</select>
		<?php		
		}
	}
	?>
	
	</body>
</html>