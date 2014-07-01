<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require APPPATH.'/libraries/REST_Controller.php';

class Session extends REST_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user','',TRUE);
	}
	
	public function index_post()
	{
		//Pido los datos del json que vienen en el input.
		
		$data_json = $_POST["json"];
		$JSONArray  = json_decode($data_json, true);
		
		
		if($this->check_database($JSONArray['username'], $JSONArray['password']) == TRUE)
			$this->response(array("success" => "exito"), 200);
		else 
			$this->response(array("error" => "El usuario es incorrecto"), 200);
	}
	
	function check_database($username,$password)
	{
	
		//query the database
		$result = $this->user->check_database($username, $password);
	
		if($result)
		{
			$sess_array = array();
			foreach($result as $row)
			{
				$sess_array = array(
						'id' => $row->id,
						'username' => $row->username
				);
				$this->session->set_userdata('logged_in', $sess_array);
			}
			 
	
			return TRUE;
		}
		else
		{
			return false;
		}
	}
}