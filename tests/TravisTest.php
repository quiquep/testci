<?php

#require_once '';

class TravisTest extends PHPUnit_Framework_TestCase
{
	public function setUp()
	{
		parent::setUp ();
	}
	
	public function tearDown()
	{
		// Nothing
	}
	
	/**
	 * @test
	 */		
	public function testSample() {
		$this->assertEquals(1, 1);
	}
}