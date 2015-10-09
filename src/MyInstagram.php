<?php
require_once __DIR__.'/../vendor/autoload.php';

use MetzWeb\Instagram\Instagram;

class MyInstagram 
{
	public function __construct() {
		$this->instagram = new Instagram(array(
		    'apiKey'      => 'YOUR_APP_KEY',
		    'apiSecret'   => 'YOUR_APP_SECRET',
		    'apiCallback' => 'YOUR_APP_CALLBACK'
		));
	}
}