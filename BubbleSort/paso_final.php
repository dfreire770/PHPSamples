<html>
	<head>
		<title>PASO FINAL</title>
	</head>
		<body>
		<?php
			for($i=0;$i<$_POST['elemento'];$i++)
			{
				for($j=$i+1;$j<$_POST['elemento'];$j++)
				{
					if($_POST['data'.$i]>$_POST['data'.$j])
					{
						$aux=$_POST['data'.$i]; 
						$_POST['data'.$i]=$_POST['data'.$j];
						$_POST['data'.$j]=$aux;
						echo $_POST['data'.$i];//este va dentro de un for por fuera pero no se como hacer porque me da error, solo asi imprime pero falta un valor
					}
				}
			}			
			echo "<center>Desea volver al inicio?<br/><a href=http://localhost/burbuja/paso1.html>Haga Click aqui para continuar</a>";
		?>
		</body>
</html>
