<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH.'/libraries/REST_Controller.php';

class News extends REST_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->model('news_model','model');
    }

	public function index_get()
	{
		$this->response($this->model->get_all(), 200);
	}
	
}