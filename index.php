<?php

//echo "Hello world!";

// komentaras - Single line comment
# komentaras - Single line comment
/* komentaras - Block comment */

	//$daliklis = 5;

	//$suma = (2 + 8 - 1) * 2 / $daliklis;

	//echo $suma;

	//$skaicius = 3.6666;
	//$suapvalintass = round($skaicius);
	//$apvalintasAukstyn = ceil($skaicius);
	//$apvalintasZemyn = floor($skaicius);


	$patalpos_plotis = 4;
	$patalpos_ilgis = 8.5;

	$plyteles_plotas = 0.33;
	$plyteles_kaina = 3;

	//$kaina = (ceil(4*8.5)/0.33) * 3; - gaunasi suapvalinta ne plytele, o kaina.

	$plyteliu_kiekis = ceil(($patalpos_plotis * $patalpos_ilgis) / $plyteles_plotas);

	$kaina = $plyteliu_kiekis * $plyteles_kaina;


	//echo "Kaina" . $kaina;

	echo "Mano random skaicius yra " . rand (100, 1000);


//rand(5, 230);
//mt_rand (nuo, iki);


//int, float, string, bool, 
// $skaicius
// $trupmeninis_skaicius
//$tekstas . taskas kaip sudetis "Mano" . "vardas" . "yra" . "Petras";
//$loginis

	// masyvai.:
	// Indexed array
	// Associative array

	$sudetis = array ("Mieles", 3, FALSE, "Druska");
	echo "Pyrago sudedamoji dalis nr 1 yra"  . $sudetis[0];

	//funkcijos
	// round
	// ceil 
	// floor
	