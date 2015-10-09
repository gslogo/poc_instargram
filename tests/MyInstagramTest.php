<?php

class MyInstagramTest extends PHPUnit_Framework_TestCase
{
	public function setUp(){
		parent::setUp();
	}

	public  function  testMyInstagram() {
		$IG = new MyInstagram();
		$this->assertInstanceOf('MyInstagram', $IG);
	} 

}