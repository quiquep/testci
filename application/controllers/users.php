<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH.'/libraries/MY_Protected_Controller.php';

class Users extends MY_Protected_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('User');
	}
	
	public function index()
	{
		$this->listAll();
	}
	
		
	public function create()
	{
		$this->load->helper('form'); 
		$this->load->view('users/create_view');
	}
	
	public function save()
	{	
		$this->User->create($_POST['username'],$_POST['password']);
		$this->listAll();
	}
	
	public function listAll()
	{
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$data['users'] = $this->User->getAll();
		$this->load->view('users/list_view' , $data);
	}
		
}
