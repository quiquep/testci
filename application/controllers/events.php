<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Events extends CI_Controller {

	public function index()
	{
		$this->listAll();
	}
	
	public function loadDummyEvent()
	{
		$data['event'] = $this->Event->getDummyEvent();
		$this->load->view('event_view' , $data);
	}
	
	public function create()
	{
		$this->load->helper('form'); 
		$this->load->view('create_event_view');
	}
	
	public function save()
	{	
		$this->Event->insert_entry();
		$this->listAll();
	}
	
	public function listAll($format='html')
	{
		$data['events'] = $this->Event->getAll();
		if($format == 'json') {
			$this->load->view('list_events_view_json' , $data);
		} else {
			$this->load->view('list_events_view' , $data);
		}
	}
}
