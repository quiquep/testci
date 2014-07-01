<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class HomeBackbone extends CI_Controller {

 function __construct()
 {
   parent::__construct();
 }

 function index()
 {
  //Llama el index.php que tiene el require.js
   $this->load->view('index_backbone');
 }
	
 

 
}

?>