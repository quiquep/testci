<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Events extends CI_Controller {

	public function index()
	{
		$this->load->model('Event');
		
		$data['event'] = $this->Event->getDummyEvent();
		
		$this->load->view('event_view' , $data);
	}
	
	
}
