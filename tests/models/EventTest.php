<?php

class EventModelTest extends PHPUnit_Framework_TestCase
{
	private $CI;

	public static function setUpBeforeClass()
	{
		$CI =& get_instance();
		$CI->load->model('Event');
	}

	public function testDummyEvent()
	{
		$event= $this->CI->Event->getDummyEvent();
		$this->assertTrue("test title" == $event->title);
	}
}

?>