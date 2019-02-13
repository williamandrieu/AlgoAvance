<?php

//GENERATION D'ENTIERS ALEATOIRES UNIQUE
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




//SUITE DE FIBONACCI EN RECURSIF
$calls = [0,1];


function fibonacci($n, &$calls)
{
	if (array_key_exists($n, $calls)) 
	{
		return $calls[$n];
	}
	else
	{
	   if ($n < 2) 
	   {return $n;}
	   else
	   {return $calls[$n] = fibonacci($n - 1,$calls)+ fibonacci($n - 2,$calls);}
	}
}



//print_r(fibonacci(50,$calls)."\n");



//COMPTE LE NOMBRE DE CHIFFRE DANS UN NOMBRE
function chiffreInNumber($number)
{

	if ($number < 10) {
		return 1;
	}
	else
	{
		
		//echo intdiv($number, 10)."\n";
		return chiffreInNumber(intdiv($number, 10))+1;
		//echo "coucou \n";
	}

}


//print_r(chiffreInNumber(29));


//CALCUL DE PUISSANCE
function calculPuissance($n,$p)
{
	if ($p == 1) {
		return $n;
	}else {
		return calculPuissance($n,$p-1) * $n;
	}
	
}



//print_r(calculPuissance(2,2));

function rechercheSelection($randTab,$randVal)
{
	$index = [];
	for ($i=0; $i < count($randVal); $i++) { 
		
		for ($j=0; $j < count($randTab); $j++) { 
			if ($randTab[$j] == $randVal[$i]) {
				$index[]= $j;
			}
		}
	}
	return $index;
}



function dichotomie($randTab,$randVal)
{
	$semiRandtab = array_slice($randTab, count($randTab)/2);
	for ($i=0; $i < ; $i++) { 
		if ($semiRandtab[0] == $randVal[$i]) {
			return "cool";
		} 
		else
		{

		}
	}


}


















$microtime = microtime(true);
$randTab = randomGeneration(100000);
print_r("\n Generation d'un tableau d'entier aleatoire unique\n");
print_r(round((microtime(true) -$microtime)*1000000)."µs");

$randVal[] = array_slice($randTab, 0,5);


$microtime = microtime(true);
sort($randTab);
print_r("\n Tri avec la fonction sort \n");
print_r(round((microtime(true) -$microtime)*1000000 )."µs \n");

// $microtime = microtime(true);
// print_r(array_search($randVal[1], $randTab));
// print_r("\n Array Search \n");
// print_r(round((microtime(true) -$microtime)*1000000)."µs \n");




$microtime = microtime(true);
print_r(dichotomie($randTab,$randVal));
print_r("\n Recherche par Dichotomie \n");
print_r(round((microtime(true) -$microtime)*1000000)."µs \n");



// $microtime = microtime(true);
// var_dump(rechercheSelection($randTab,$randVal));
// print_r("\n Recherche par Selection \n");
// print_r(round((microtime(true) -$microtime)*1000000)."µs \n");










































