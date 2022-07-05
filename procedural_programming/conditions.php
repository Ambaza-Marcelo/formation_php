<?php
	/*
		les conditions

	*/
	$x;
	$y;
	$x=10;
	$y=5;

	if ($x == $y) {
		echo $x." et ".$y." sont egeaux <br>";
	}else
	{
		echo $x." et ".$y." ne sont pas egeaux <br>";
	}

	//plusieurs conditions

	$mois;
	$mois=5;
	if ($mois == 1) {
		echo "Le mois est janvier";
	}elseif ($mois == 2) {
		echo "Le mois est fevrier";
	}elseif ($mois == 3) {
		echo "Le mois est mars";
	}elseif ($mois == 4) {
		echo "Le mois est avril";
	}elseif ($mois == 5) {
		echo "Le mois est mai";
	}elseif ($mois == 6) {
		echo "Le mois est juin";
	}elseif ($mois == 7) {
		echo "Le mois est juillet";
	}elseif ($mois == 8) {
		echo "Le mois est Aout";
	}elseif ($mois == 9) {
		echo "Le mois est septembre";
	}elseif ($mois == 10) {
		echo "Le mois est octobre";
	}elseif ($mois == 11) {
		echo "Le mois est novembre";
	}elseif ($mois == 12) {
		echo "Le mois est decembre";
	}else
	{
		echo "Le mois est invalide";
	}
	//retour a la ligne
	echo "<br><br><br>";
	//la condition switch case


	$mois;
	$mois=12;
	switch ($mois) {
		case '1':
			echo "Le mois est janvier";
			break;
		case '2':
			echo "Le mois est fevrier";
			break;
		case '3':
			echo "Le mois est mars";
			break;
		case '4':
			echo "Le mois est avril";
			break;
		case '5':
			echo "Le mois est mai";
			break;
		case '6':
			echo "Le mois est juin";
			break;
		case '7':
			echo "Le mois est juillet";
			break;
		case '8':
			echo "Le mois est aout";
			break;
		case '9':
			echo "Le mois est septembre";
			break;
		case '10':
			echo "Le mois est octobre";
			break;
		case '11':
			echo "Le mois est novembre";
			break;
		case '12':
			echo "Le mois est Decembre";
			break;
		default:
			echo "Le mois est invalide";
			break;
	}

?>