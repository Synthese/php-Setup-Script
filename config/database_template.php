<?php

class DATABASE_CONFIG
{
	var $default = array(
		'driver' => 'mysql',
		'persistent' => false,
		'host' => '%%host%%',
		'login' => '%%username%%',
		'password' => '%%password%%',
		'database' => '%%database%%',
		//'prefix' => '%%prefix%%',  ist noch nicht im Formular mit drin
	);
}
