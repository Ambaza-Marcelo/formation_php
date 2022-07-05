<?php 

	//dire salut a Marcellin 4 fois
	//procedure qui ne retourne rien
	function salut()
	{
		$nom;
		$nom = "Marcellin";
		echo "salut ".$nom."<br>";
	}

	for ($i=0; $i < 5 ; $i++) { 
		salut();
	}

	echo "<br><br>";
	//la fonction qui va retourner une valeur
	function somme($x,$y)
	{
		return $x+$y;
	}

	$s = somme(10,6);
	echo "La somme  est :".$s;

?>