<?php

	//les tableaux numerotes

	$tab = array("ambaza","Irakoze","irabona","Irakiza","Nikiza","Bayubahe");
	echo $tab[1]."<br>";
	echo $tab[3]."<br>";
	echo $tab[4]."<br>";
	//parcours du tableau
	for ($i=0; $i < sizeof($tab); $i++) { 
		echo $tab[$i]."<br>";
	}

	//les tableaux associatifs

	$t = array(

		'Nom :' => 'Ambaza',
	 	'Prenom :' => 'Marcellin',
	 	'Age :' => '20 ans',
	 	'adresse :' => 'Rohero,boulevard de l\'uprona',
	 	'telephone :' => '45354566'
	 );

	foreach ($t as $key => $tableau) {
		echo $tableau."<br>";
	}


?>