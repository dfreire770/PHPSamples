<?php
	
	function Gnomo($arr) 
	{ 
		for ($i = 1; $i < count($arr);) 
		{ 
			if ($arr[$i-1] <= $arr[$i]) 
			{
				$i++;
			} 
			else 
			{ 
				$aux = $arr[$i]; 
				$arr[$i] = $arr[$i-1]; 
				$arr[$i-1] = $aux; 
				$i--; 
				if ($i == 0) 
				{
					$i = 1;
				} 
			} 
		} 
		return $arr; 
	}    
    function main()
    {
        $arr1=array(3,5,2,0,1,4,6,9,8,7);
        $arr2=Gnomo($arr1,sizeof($arr1));
        echo ("el arreglo en forma desordenada es:<br>");
		for($i=0;$i<sizeof($arr1);$i++)
            echo $arr1[$i]."\n";
		echo "<br>";
		echo ("Aplicando el metodo estúpido o gnomo:<br>");
        for($i=0;$i<sizeof($arr2);$i++)
            echo $arr2[$i]."\n";
    }
    main();
?>