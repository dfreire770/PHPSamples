<?php
	function cola()
	{
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
	function pila()
	{
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
	function lista()
	{
		require("lista.php");
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
		}
		$mi_lista->imprimir();
	}
	function lista_doble()
	{
		require("lista_doble.php");
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
		}
		$mi_lista->imprimir();
	}
	function lista_circular()
	{
		require("lista_circular.php");
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
		}
		$mi_lista->imprimir();
	}
?>
