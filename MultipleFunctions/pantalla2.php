<html>
	<head>
		<title>Lectura</title>
	</head>
	<body bgcolor="#0099FF"> 
	<?php
		require("funciones.php");
		if($_POST['path']!=null)
		{
			$dir = $_POST['path'];
			$tipo = ext($dir);
			$opcion=$_POST['opcion1'];
			echo "<center>La extension del documento es: ".$tipo."<center>";
			if($tipo == "csv")
			{
				csv($dir,$opcion);
			}
			else if($tipo== "xml")
			{
				xml($dir,$opcion);
			}
			else if($tipo=="zip")
			{
				zip($dir,$opcion);
			}
			else
			{
				echo "Debe ingresar un documento XML, CSV o ZIP";
				exit();
			}
		}
		else
		{
			echo "Debe ingresar un documento";
		}	
	?>
	</body>
	</html>