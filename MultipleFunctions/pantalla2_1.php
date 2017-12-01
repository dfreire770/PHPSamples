<html>
	<head>
		<title>Lectura</title>
	</head>
	<body bgcolor="#0099FF"> 
	<?php
		
		if($_POST['path']!=null)
		{
			if($_POST['opcion1']==1)//si el archivo esta encriptado
			{
				require("desencriptar.php");
				$dir = $_POST['path'];
				$tipo = ext($dir);
				echo "<center>La extension del documento es: ".$tipo."<center>";
				if($tipo == "csv")
				{
					csv($dir);
				}
				else if($tipo== "xml")
				{
					xml($dir);
				}
				else if($tipo=="zip")
				{
					zip($dir);
				}
				else
				{
					echo "Debe ingresar un documento XML, CSV o ZIP";
					exit();
				}
			}
			else if($_POST['opcion1']==2)
			{
				require("funciones.php");
				$dir = $_POST['path'];
				$tipo = ext($dir);
				$opcion=$_POST['opcion1'];
				echo "<center>La extension del documento es: ".$tipo."<center>";
				if($tipo == "csv")
				{
					csv($dir);
				}
				else if($tipo== "xml")
				{
					xml($dir);
				}
				else if($tipo=="zip")
				{
					zip($dir);
				}
				else
				{
					echo "Debe ingresar un documento XML, CSV o ZIP";
					exit();
				}
			}
		}
		else
		{
			echo "Debe ingresar un documento";
		}	
	?>
	</body>
	</html>