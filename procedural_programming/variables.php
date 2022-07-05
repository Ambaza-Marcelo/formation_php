<?php
	/*
		declaration des variables ,affectation des valeurs et affichage

	*/
	$nom;
	$prenom;
	$age;
	$adresse;
	$telephone;

	$nom = "Ambaza";
	$prenom = "Marcellin";
	$age = 21;

	
	$nom = "Irakoze";
	//echo $nom;
	$adresse = "Rohero Avenue Muyinga";
	$telephone = 71164310;
	//echo $telephone;

	echo " je m'appelle ".$nom." ".$prenom."<br> j'ai ".$age." ans <br>";

	$x= 10;
	$y = 5;
	$s = $x+$y;
	$p = $x * $y;
	$mod = $x%$y;
	$d = $x/$y;

	echo "La somme de ".$x." et ".$y." est : ".$s."<br>";
	echo "Le produit de ".$x." et ".$y." est : ".$p."<br>";
	echo "Le modulo de ".$x." et ".$y." est : ".$mod."<br>";
	echo "La division de ".$x." et ".$y." est : ".$d."<br>";
?>