<?php

#require_once '';

class Test extends PHPUnit_Framework_TestCase
{
	public function setUp()
	{
		parent::setUp ();
	}
	
	public function tearDown()
	{
		// Nothing
	}
		
	public function testSample() {
		$this->assertEquals(1, 1);
	}
}