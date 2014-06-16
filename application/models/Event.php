<?php
class Event extends CI_Model {
	var $title;
	var $description;
	var $datetime;
	
	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}

	function getDummyEvent() {
		$event = new Event();
		$event->title ="test title";
		$event->description = "test description";
		$event->datetime = "11/06/2014 11:05";
		return $event;
	}
	
  	function insert_entry()
    {
        $this->title   = $this->input->POST('title'); 
        $this->description = $this ->input->POST('description');
        $date = str_replace('/', '-', $_POST['datetime']);
        $date = date('Y-m-d', strtotime($date));
        $this->datetime  = $date;
        $this->load->database();
        $this->db->insert('event', $this);
    }
    
    function getAll()
    {
    	$this->load->database();
    	$query = $this->db->get('event');
	    return $query->result('Event');
    }
}

?>