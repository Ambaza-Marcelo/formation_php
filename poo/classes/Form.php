<?php

	/*
	*permet de generer un formulaire rapidement et simplement
	*/
	class Form
	{
		private $data;
		public $surround = 'p';
		private static $suffix=" $";
		const SUFFIX = " $";

		public function __construct($data = array())
		{
			$this->data = $data;
		}

		private function surround($html)
		{
			echo "<{$this->surround}>{$html}</{$this->surround}>";
		}

		private function getValue($index)
		{
			return isset($this->data[$index]) ? $this->data[$index]:null;
		}

		public function input($name)
		{
			return $this->surround('<input type="text" name="'.$name.'"
				value="' .$this->getValue($name).'"/><br>');
		}

		public function submit()
		{
			return $this->surround('<input type="submit" value="Envoyer"/>');
		}


		public static function chiffre($chiffre)
		{
			if ($chifre<=9) {
				return '0'.$chiffre. self::SUFFIX;
			}else
			{
				return $chiffre. self::SUFFIX;
			}
		}
	}