<?php

class nodo
{
	
	var $dato;//ambas variables son publicas	
	var $anterior;
	var $siguiente;
	
	function nodo($dato,$siguiente,$anterior)
	{
		$this->dato=$dato;//aunque estas variables tengan los mismos nombres, no son los mismos, estos son locales
		$this->siguiente=$siguiente;//no estan inicializados
		$this->anterior=$anterior;
	}
	
}
/*$nodo1=new nodo("3",null);
$nodo2=new nodo("4",$nodo1);
$nodo3=new nodo("6", $nodo2);

$nodo_actual=$nodo3;
while($nodo_actual!=null)
{
	echo $nodo_actual->dato."<br/>";
	$nodo_actual=$nodo_actual->siguiente;
}*/
?>