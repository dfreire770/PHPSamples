<?php
require("nodo_circular.php");

class lista
{
	var $primer_elemento = null;
	var $cont=0;
	var $ultima_posicion=0;
	function cont()
	{
		return $this->cont;
	}
	function length()
	{
		$nodo_actual=$this->primer_elemento;
		while($nodo_actual->siguiente!=null)
		{
			$nodo_actual=$nodo_actual->siguiente;	
			$this->cont++;
		}
	}
	function insertar_elemento($elemento, $pos)
	{
		if($this->primer_elemento==null)
		{
			$this->primer_elemento=new nodo($elemento, null);
			$this->primer_elemento->siguiente=$this->primer_elemento;
		}
		else
		{
			$cont=0;
			$nodo_actual=$this->primer_elemento;
			$primer_elemento=$this->primer_elemento;
			while($cont<$pos-1)
			{
				$nodo_actual=$nodo_actual->siguiente;	
				$cont++;
			}
			$nodo_actual->siguiente=new nodo($elemento, $nodo_actual->siguiente);
		}
		$this->cont++;
	}
	
	function imprimir()
	{
		$nodo_actual=$this->primer_elemento;
		for($i=0;$i<$this->cont;$i++)
		{
			echo $nodo_actual->dato."<br>";
			$nodo_actual=$nodo_actual->siguiente;
		}
	}
	function recuperar($pos)
	{
		$cont=0;
		$nodo_actual=$this->primer_elemento;
		for($i=0;$i<$this->cont;$i++)
		{
			$nodo_actual->dato;
			if($cont==$pos)
			{
				echo $nodo_actual->dato."<br>";
			}
			else
			{
				$nodo_actual=$nodo_actual->siguiente;
			}
			$cont++;
		}
		//$cont=$ultima_posicion;
	}

}
/*
$mi_lista = new lista_circular();
$mi_lista->insertar_elemento("6", 0);
$mi_lista->insertar_elemento("4", 1);
$mi_lista->insertar_elemento("3", 2);
$mi_lista->insertar_elemento("5", 3);
$mi_lista->insertar_elemento("2", 4);
$mi_lista->insertar_elemento("a", 5);
$mi_lista->imprimir();
$mi_lista->recuperar(5);*/
?>