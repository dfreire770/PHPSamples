<?php
	//Nombre programa: programa.php
	class cola
	{
		var $arreglo = array();// es un arreglo de cualquier tipo de dato
		
		function queue ($elemento)
		{
			array_push($this->arreglo, $elemento);
		}
		function dequeue ()
		{
			$elemento=false;
			if($this->is_empty()!=0)
			{
				$elemento = $this->arreglo[0];
				array_shift($this->arreglo);
			}
			return $elemento;
		}
		function is_empty()
		{
			return sizeof($this->arreglo);
		}
	}
	$objeto_cola = new cola();
	$objeto_cola->queue($_POST['uno']);
	$objeto_cola->queue($_POST['dos']); 
	$objeto_cola->queue($_POST['tres']); 
	$objeto_cola->queue($_POST['cuatro']); 
	$objeto_cola->queue($_POST['cinco']); 	
	while($objeto_cola->is_empty()!=0)
	{
		echo $objeto_cola->dequeue()."<br/>";//el punto es para concatenar
	}
	
?>
