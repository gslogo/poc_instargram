<?php
require_once __DIR__.'/../vendor/autoload.php';

use MetzWeb\Instagram\Instagram;

class MyInstagram 
{
	public function __construct() {
		$this->instagram = new Instagram(array(
		    'apiKey'      => '639d8639828c4c49906589d7a742ecd4',
		    'apiSecret'   => 'ca70b620c5ec452dadd34b5128769ea2',
		    'apiCallback' => 'http://localhost'
		));
	}
	
	
}