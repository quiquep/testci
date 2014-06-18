<?php

class EventModelTest extends CITestCase
{
	public function setUp()
	{
		#$this->CI->load->model('Event');
	}

	public function testDummyEvent()
	{
		$event= $this->CI->Event->getDummyEvent();
		$this->assertTrue("test title" == $event->title);
	}
}

?>