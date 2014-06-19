<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH.'/libraries/MY_Protected_Controller.php';

class News extends MY_Protected_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->model('news_model','model');
    }

	public function index(){
		$this->list_all();
	}

	public function list_all(){
		$data['news'] = $this->model->get_all();
		$this->load->view('news/list',$data);
	}

	public function add_news(){
		$this->load->view('news/create');
	}

	public function create(){
		$this->model->insert();
		$this->list_all();
	}

	public function rest()
	{
		$this->load->view('news/list_rest');
	}
}