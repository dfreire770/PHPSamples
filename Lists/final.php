<?php
	<?php
		require("lista.php");
		if($pos>$cont)
		{
			echo "no se puede continuar";
		}
		else
		{
			insertar_elemento($_POST['elemento'],$_POST['posicion']);
		}
		
		
		
		$mi_lista = new lista();
		for($i=0;$i<$_POST['elemento'];$i++)
		{
			$mi_lista->insertar_elemento($_POST['elemento'], $_POST['posicion']);
			$mi_lista->cont($i);
		}
		$mi_lista->imprimir();
	?>
?>