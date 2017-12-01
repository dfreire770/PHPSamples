<html>
	<head>
		<title>PASO FINAL</title>
	</head>
		<body>
		<?php
			class cola
			{
				var $arreglo = array();// es un arreglo de cualquier tipo de dato
				
				function queue ($elemento)
				{
					array_push($this->arreglo, $elemento);
				}
				function dequeue ()
				{
					$elemento=false;
					if($this->is_empty()!=0)
					{
						$elemento = $this->arreglo[0];
						array_shift($this->arreglo);
					}
					return $elemento;
				}
				function is_empty()
				{
					return sizeof($this->arreglo);
				}
			}
			if($_POST['opcion']==1)
			{
				echo "<center>Utilizando el metodo COLAS:<br/>";
				$objeto_cola = new cola();
				for($i=0;$i<$_POST['elemento'];$i++)
				{
					$objeto_cola->queue($_POST['data'.$i]);
				}
				while($objeto_cola->is_empty()!=0)
				{
					echo $objeto_cola->dequeue()."<br/>";
				}
			}
			else
			{
				echo "<center>Utilizando SPL QUEUE<br/>";
				$q = new SplQueue();
				for($i=0;$i<$_POST['elemento'];$i++)
				{
					$q[] = $_POST['data'.$i];
					echo $q->dequeue()."<br/>";
				}
			}
			echo "<center>Desea volver al inicio?<br/><a href=http://localhost/Colas/paso1.html>Haga Click aqui para continuar</a>";
		?>
		</body>
</html>
