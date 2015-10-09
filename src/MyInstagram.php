<?php
require_once __DIR__.'/../vendor/autoload.php';

use MetzWeb\Instagram\Instagram;

class MyInstagram 
{
	public function __construct() {

		$ini_array = parse_ini_file("config.ini");
		$this->instagram = new Instagram(array(
		    'apiKey'      => $ini_array['apiKey'],
		    'apiSecret'   => $ini_array['apiSecret'],
		    'apiCallback' => $ini_array['apiCallback']
		));

	

	}

	
}