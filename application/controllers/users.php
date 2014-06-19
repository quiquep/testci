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
		$this->load->library('form_validation');
		//Chequeo primero si estan el base de datos.
		
		$this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean|callback_check_database');
		
				
		if($this->form_validation->run() == FALSE)
		{
			//Field validation failed.  User redirected to login page
			$this->load->view('users/create_view');
			
		}
		else
		{
			$this->User->create($_POST['username'],$_POST['password']);
			$this->listAll();
		}
		
	}
	
	//Chequea en la base de datos si el usuario ya existe.
	function check_database($password)
	{
		//Field validation succeeded.  Validate against database
		$username = $this->input->post('username');
	
		//query the database
		$result = $this->User->check_database($username, $password);
	
		if($result)
		{
			$this->form_validation->set_message('check_database', 'There is an existing user');
			return false;
		}
		else
		{
			return TRUE;
		}
	}
	
	
	
	public function listAll()
	{
		$session_data = $this->session->userdata('logged_in');
		$data['username'] = $session_data['username'];
		$data['users'] = $this->User->getAll();
		$this->load->view('users/list_view' , $data);
	}
		
}
