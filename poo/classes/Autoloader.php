<?php

class Autoloader
{
	public static function autoload($class_name)
	{
		require 'classes/'.$class_name.'.php';
	}

	public static function register()
	{
		spl_autoload_register(array(__CLASS__,'autoload'));
	}
}