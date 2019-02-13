<?php



function stairs(int $top, $valuesArray){
    $newArray;
    foreach ($valuesArray as $val) {
        if($top % $val == 0){
            $number = $top / $val;
            for ($nb=0; $nb < $number; $nb++) { 
                if($nb == $number-1){
                    $newArray.= $val;
                }else{
                    $newArray.= $val.",";
                }
            }
            break;
        }
    }
    return $newArray;
}
print_r(" stairs : ".stairs(10,[11,7])."\n");

function stair($nbStep, $pas)
{	
	$tab  = [];
	$tab1 = [];
	for ($i=0; $i < count($pas); $i++) 
		{
			for ($j=0; $j < count($pas); $j++) { 
				$tab[] = [$pas[$i],$pas[$j]];
			}
			
			
		};




		for ($i=0; $i < count($pas); $i++) 
			{
				
					$tab1[$i] = $tab;
					for ($j=0; $j < count($tab); $j++) { 
						$sum = array_sum($tab1[$i][$j]) + $pas[$i];
						if( $sum == $nbStep ){

						$tab1[$i][$j][] = $pas[$i];
						$result[] = $tab1[$i][$j]; 

						}
					}

			}; 	
	
		return $result;
		

		
}




print_r(stair(10,[3,4]));
















