<?php




function randomGeneration($nbRandom)
{	
	$randTab = [];
	while (count($randTab) < $nbRandom) {

		do {
			$randTab[] = random_int(0, getrandmax());
		
			
		} while (count($randTab) < $nbRandom);
		$randTab = array_unique($randTab);
	}
	return array_values($randTab);
		
}			

/*
 function randomGeneration($nbRandom)
{
	$randTab = [];
	do {
		$randTab[] = random_int(0, getrandmax());
	
		$randTab = array_unique($randTab);
	} while (count($randTab) < $nbRandom);
	return $randTab;
}*/






$microtime = microtime(true);
$randTab = randomGeneration(10000);
print_r("\n Generation d'un tableau d'entier aleatoire unique\n");
print_r(round((microtime(true) -$microtime)*1000 )."ms");

$microtime = microtime(true);
triParInsertion($randTab);
print_r("\n Tri par Insertion\n");
print_r(round((microtime(true) -$microtime)*1000 )."ms \n");

// $microtime = microtime(true);
// triEchange($randTab);
// print_r("\n Tri par Echange \n");
// print_r(round((microtime(true) -$microtime)*1000 )."ms");

// $microtime = microtime(true);
// triBubble($randTab);
// print_r("\n Tri a Bulle \n");
// print_r(round((microtime(true) -$microtime)*1000 )."ms");

// $microtime = microtime(true);
// triBubbleAdvanced($randTab);
// print_r("\n Tri a Bulle amelioré \n");
// print_r(round((microtime(true) -$microtime)*1000 )."ms \n");

$microtime = microtime(true);
sort($randTab);
print_r("\n Tri avec la fonction sort \n");
print_r(round((microtime(true) -$microtime)*1000 )."ms \n");




function triEchange($randTab)
{
	for ($i=0; $i < count($randTab); $i++) 
	{
		for ($j=$i+1; $j < count($randTab); $j++) { 
			if ($randTab[$i] > $randTab[$j]) {
				[$randTab[$i], $randTab[$j]] = [$randTab[$j], $randTab[$i]];
			}
		}
	}
	return $randTab;
}
function triBubble($randTab)
{
	$counter = count($randTab);
	for ($i=0; $i < count($randTab); $i++) 
	{
		for ($j=0; $j < $counter-1 ; $j++) { 
			if ($randTab[$j] > $randTab[$j+1])
				{
					[$randTab[$j], $randTab[$j+1]] = [$randTab[$j+1], $randTab[$j]];
					//$counter--;
				}
		}		
	}
	return $randTab;
}


function triBubbleAdvanced($randTab)
{
	$counter = count($randTab);
	for ($i=0; $i < count($randTab); $i++) 
	{
		for ($j=0; $j < $counter ; $j++) { 
			if ($randTab[$j] > $randTab[$j+1])
				{
					[$randTab[$j], $randTab[$j+1]] = [$randTab[$j+1], $randTab[$j]];
					
				}
		}	
		$counter--;	
	}
	return $randTab;
}

function triParInsertion($randTab)
{
	
	for ($i=1; $i < count($randTab); $i++)
	 { 
	 	$j = $i;
	 	$tmp = $randTab[$i];

	 	while($j > 0 && $randTab[$j-1] > $tmp ){
	 		$randTab[$j] = $randTab[$j-1];
	 		$j--;
	 	}
	 	$randTab[$j] = $tmp;
	 }


return $randTab;

}



















