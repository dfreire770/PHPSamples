<?php
    function selectionsort(){
        for ($i=0; $i<$n-1; $i++){
              $min=$i;
              for($j=$i+1; $j<$n; $j++)
                    if($A[$min] > $A[$j])
                       $min=$j;
              $aux=$A[$min];
              $A[$min]=$A[$i];
              $A[$i]=$aux ;
        }
      return $A;
    }
	
    function shakersort(){
        for($k=$n-1;$k>=0;$k--){
                for($i=1;$i<=$k;$i++){
                        $item=$A[$i];
                        $j=$i/2;
                        while($j>0 && $A[$j]<$item){
                                $A[$i]=$A[$j];
								$i=$j;
                                $j=$j/2;
                        }
                        $A[$i]=$item;
                }
                $temp=$A[0];
                $A[0]=$A[$k];
                $A[$k]=$temp;
        }
      return $A;
    }
	
	function burbuja($A)
	{
		$n=$_POST['elemento'];
		for($i=1;$i<$n;$i++)
		{
                for($j=0;$j<$n-$i;$j++)
				{
                        if($A[$j]<$A[$j+1])
                        {
							$k=$A[$j+1]; $A[$j+1]=$A[$j]; $A[$j]=$k;
						}
                }
        }
      return $A;
    }
	
	 function insercion(){
        for ($i = 1; $i < $n; $i++){
                 $v = $A[$i];
                 $j = $i - 1;
                 while ($j >= 0 && $A[$j] > $v){
                          $A[$j + 1] = $A[$j];
                          $j--;
                 }
                 $A[$j + 1] = $v;
        }
        return $A;
    }
	
    function main()
    {
			if($_POST['opcion']==1){
				
				$VectorB=selectionsort();
			}
			else if($_POST['opcion']==2){
				$VectorB=shakersort();		
			}
			else if($_POST['opcion']==3){
				for($i=0;$i<$_POST['elemento'];$i++)
				{
					$VectorA=array($_POST['data'.$i]);
				}
				$VectorB=burbuja($VectorA);
				
			}
			else if($_POST['opcion']==4){
				$VectorB=insercion();
			}
			for($i=0;$i<sizeof($VectorB);$i++)
			{
				echo $VectorB[$i]."\n";
			}
	}
    main();
?>