<?php
require("prueba_nodos.php");

class lista
{
	var $primer_elemento = null;
	//var $num_elementos = 0;
	
	function cont($pos)
	{
		$cont=0;
		$nodo_actual=$this->primer_elemento;
		while($cont<=$pos)
		{
			$nodo_actual=$nodo_actual->siguiente;	
			$cont++;
		}
		echo $cont."<br/>";
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
	
}

/*
$mi_lista = new lista();
$mi_lista->insertar_elemento("6", 0);
$mi_lista->insertar_elemento("4", 1);
$mi_lista->insertar_elemento("3", 2);
$mi_lista->cont(2);
$mi_lista->imprimir();*/
?>