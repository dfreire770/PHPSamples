<?php
	if($_POST['opcion']==1)
	{
		require('metodos/lista.php');
		$mi_lista = new lista();
		for($i=0;$i<$_POST['elemento'];$i++)
		{
			if($_POST['data'.$i]!=null)
			{
				$mi_lista->insertar_elemento($_POST['data'.$i], $i);
			}
			else
			{
				echo "Debe ingresar los elementos: ".$i;
			}
			$mi_lista->imprimir();
			echo "El elemento en la posicion ".$_POST['elemento1']. " es: ";
			$mi_lista->recuperar($_POST['elemento1']);
		}
	}
	else if($_POST['opcion']==2)
	{
		require('metodos/lista_doble.php');
		$mi_lista = new lista();
		for($i=0;$i<$_POST['elemento'];$i++)
		{
			if($_POST['data'.$i]!=null)
			{
				$mi_lista->insertar_elemento($_POST['data'.$i], $i);
			}
			else
			{
				echo "Debe ingresar los elementos: ".$i;
			}
			$mi_lista->imprimir();
			echo "El elemento en la posicion ".$_POST['elemento1']. " es: ";
			$mi_lista->recuperar($_POST['elemento1']);
		}
		
	}
	else if($_POST['opcion']==3)
	{
		require('metodos/lista_circular.php');
		$mi_lista = new lista();
		for($i=0;$i<$_POST['elemento'];$i++)
		{
			if($_POST['data'.$i]!=null)
			{
				$mi_lista->insertar_elemento($_POST['data'.$i], $i);
			}
			else
			{
				echo "Debe ingresar los elementos: ".$i;
			}
			$mi_lista->imprimir();
			echo "El elemento en la posicion ".$_POST['elemento1']. " es: ";
			$mi_lista->recuperar($_POST['elemento1']);
		}
		
	}
?>