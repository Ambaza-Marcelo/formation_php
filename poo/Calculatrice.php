<?php
class Calculatrice
{
	//declaration des attributs
	private $x1;
	private $x2;

	//le constructeur avec deux parametres
	public function __construct($x1,$x2)
	{
		$this->setX1($x1);
		$this->setX2($x2);
	}

	//les accesseurs
	public function x1()
	{
		return $this->x1;
	}
	public function x2()
	{
		return $this->x2;
	}
	//les mutateurs
	public function setX1($x1)
	{
		$this->x1 = $x1;
	}
	public function setX2($x2)
	{
		$this->x2 = $x2;
	}

	public static function somme($x1,$x2)
	{
		$s=$x1 + $x2;
		echo "somme =".$s;
	}
	public static function soustraction($x1,$x2)
	{
		if($x1 >= $x2)
		{
			$soustr = $x1 - $x2;
		}else
		{
			$soustr = $x2 - $x1;
		}

		echo "Difference = ".$soustr;
	}

	public static function multiplication($x1,$x2)
	{
		$p= $x1 * $x2;
		echo "Produit = ".$p;
	}

	public static function modulo($x1,$x2)
	{
		if($x1>$x2){
			$m = $x1 % $x2;
		}else
		{
			$m = $x2 % $x1;
		}

		echo "Reste = ".$m;
	}
	public static function divisible($x1,$x2)
	{

	}
	public function afficher()
	{
		echo "<br>X1 = ".$_POST['x1']."<br>";
		echo "<br>X2 = ".$_POST['x2']."<br>";
	}
}

	$objet1 = new Calculatrice($_POST['x1'],$_POST['x2']);
	$objet1->afficher();
	if (isset($_POST['addition'])) {
		if (isset($_POST['x1']) && isset($_POST['x2'])) {
			Calculatrice::somme($_POST['x1'],$_POST['x2']);
		}else{
			$msg = "veuiller saisir les elements";
		}
	}elseif (isset($_POST['soustraction'])) {
		if (isset($_POST['x1']) && isset($_POST['x2'])) {
			Calculatrice::soustraction($_POST['x1'],$_POST['x2']);
		}
	}elseif (isset($_POST['multiplication'])) {
		if (isset($_POST['x1']) && isset($_POST['x2'])) {
			Calculatrice::multiplication($_POST['x1'],$_POST['x2']);
		}
	}elseif (isset($_POST['modulo'])) {
		if (isset($_POST['x1']) && isset($_POST['x2'])) {
			Calculatrice::modulo($_POST['x1'],$_POST['x2']);
		}
	}elseif (isset($_POST['divisible'])) {
		if (isset($_POST['x1']) && isset($_POST['x2'])) {
			Calculatrice::divisible($_POST['x1'],$_POST['x2']);
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Programmation orientee objet</title>
</head>
<body>
	<form action="Calculatrice.php" method="post">
		<div><br>
			<label for="x1">X1:</label>
			<input type="number" name="x1" id="x1">
		</div><br>
		<div>
			<label for="x2">x2:</label>
			<input type="number" name="x2" id="x2">
		</div><br>
		<div>
			<input type="submit" name="addition" value="Addition">
			<input type="submit" name="soustraction" value="Soustraction">
			<input type="submit" name="multiplication" value="Multiplication">
			<input type="submit" name="modulo" value="Modulo">
			<input type="submit" name="divisible" value="Divisibilite">
		</div>
	</form>
</body>
</html>