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
	
	public function listAll()
	{
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$data['events'] = $this->Event->getAll();
		$this->load->view('list_events_view' , $data);
	}
	
	public function rest()
	{
		$this->load->view('list_events_rest_view');
	}
}
