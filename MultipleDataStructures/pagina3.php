<?php
	if($_POST['opcion']==1)
	{
		echo "Utilizando SPL Stack";
		$pila = new SplStack();
		for($i=0;$i<$_POST['elemento'];$i++)
		{
			$pila->push($_POST['data'.$i]);
		}
		foreach( $pila as $s )
		{
			echo $pila->pop()."<br/>";
		}
	}
	else if($_POST['opcion']==2)
	{
		echo "Utilizando SPL Queue";
		$cola=new SplQueue();
		for($i=0;$i<$_POST['elemento'];$i++)
		{
			$cola->enqueue($_POST['data'.$i]);
		}
		foreach ($cola as $item) 
		{
			echo $item."<br>";
		}

	}
	else if($_POST['opcion']==3)
	{
		echo "Utilizando Listas Simples";
		for($i=0;$i<$_POST['elemento'];$i++)
		{
		
		}
	}
	else if($_POST['opcion']==4)
	{
		echo "Utilizando Listas Dobles";
		for($i=0;$i<$_POST['elemento'];$i++)
		{
		
		}
	}
	else if($_POST['opcion']==5)
	{
		echo "Utilizando Listas Circulares";
		for($i=0;$i<$_POST['elemento'];$i++)
		{
		
		}
	}






?>