<?php

Class Personne
{
	private $nom;
	private $prenom;
	private $age;
	private $adresse;
	private $telephone;

	private static $BONJOUR;

	//methode special ,constructeur
	public function __construct($nom,$prenom,$age){

		$this->setNom($nom);
		$this->setPrenom($prenom);
		$this->setAge($age);
	}

	//les mutateurs et accesseurs
	public function setNom($nom)
	{
		if (!is_string($nom)) {
			echo "erreur,c'est pas une chaine";
		}elseif (strlen($nom)>5) {
			trigger_error("le nom est trop long");
		}
		$this->nom = $nom;
	}
	public function setPrenom($prenom)
	{
		$this->prenom = $prenom;
	}

	public function nom()
	{
		return $this->nom;
	}
	public function prenom()
	{
		return $this->prenom;
	}

	public function age()
	{
		return $this->age;
	}
	public function setAge($age)
	{
		if (!is_int($age)) {
			echo "l'age doit etre un entier<br>";
		}elseif ($age<=0) {
			echo "age doit etre un entier strictement positif";
		}elseif ($age>=1 && $age<18) {
			echo "vous etes mineur<br>";
		}else
		{
			echo "vous etes majeur<br>";
		}
		$this->age = $age;
	}

	public static function bonjour()
	{
		$BONJOUR = "salut et Bienvenu sur mon super page!!";
		echo $BONJOUR;
	}


}

	$objet = new Personne(htmlspecialchars($_POST['nom']),$_POST['prenom'],$_POST['age']);

	echo "on vous appelle ".$objet->nom()."<br>";

	Personne::bonjour();
	echo "<br> je connais votre age!! vous avez ".$objet->age()." ans";


?>
<!DOCTYPE html>
<html>
<head>
	<title>programmation orientee objet</title>
</head>
<body>
	<form action="Personne.php" method="post">
		<input type="text" name="nom">
		<input type="text" name="prenom">
		<input type="number" name="age">
		<input type="submit" name="submit" value="Envoyer">
	</form>
	
</body>
</html>