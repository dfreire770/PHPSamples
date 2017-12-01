<?php
require("nodos_simple.php");

class lista
{
	var $primer_elemento = null;
	//var $num_elementos = 0;
	
	function cont()
	{
		$cont=0;
		$nodo_actual=$this->primer_elemento;
		while($nodo_actual->siguiente!=null)
		{
			$nodo_actual=$nodo_actual->siguiente;	
			$cont++;
		}
		return $cont;
	}
	
	function insertar_elemento($elemento, $pos)
	{
		if($this->primer_elemento==null)
		{
			$this->primer_elemento=new nodo($elemento, null);
		}
		else
		{
			$cont=0;
			
			$nodo_actual=$this->primer_elemento;
			while($cont<$pos-1)
			{
				$nodo_actual=$nodo_actual->siguiente;	
				$cont++;
			}
			$nodo_actual->siguiente=new nodo($elemento, $nodo_actual->siguiente);
		}
	}
	
	function imprimir()
	{
		$nodo_actual=$this->primer_elemento;
		while($nodo_actual!=null)
		{
			echo $nodo_actual->dato."<br>";
			$nodo_actual=$nodo_actual->siguiente;
		}
	}
	function recuperar($pos)
	{
		$cont=0;
		$nodo_actual=$this->primer_elemento;
		while($nodo_actual!=null)
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
	}
}

/*
$mi_lista = new lista();
$mi_lista->insertar_elemento("6", 0);
$mi_lista->insertar_elemento("4", 1);
$mi_lista->insertar_elemento("3", 2);
$mi_lista->imprimir();
echo "el tamanño ".$mi_lista->cont()."<br/>";
$mi_lista->recuperar(2);*/
?>