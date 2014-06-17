<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH.'/libraries/REST_Controller.php';

class Events extends REST_Controller {

	public function index_get()
	{
		$this->response($this->Event->getAll(), 200);
	}
	
}
