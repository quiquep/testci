<?php

class EventModelTest extends CITestCase
{
	public static function setUp()
	{
		$this->CI->load->model('Event');
	}

	public function testDummyEvent()
	{
		$event= $this->Event->getDummyEvent();
		$this->assertTrue("test title" == $event->title);
	}
}

?>