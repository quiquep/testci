<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News_model extends CI_Model {

	public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function insert(){
        $data = array(
            'title' => $this->input->post('title'),
            'body' => $this->input->post('body')
        );
        $this->db->insert('news', $data);
    }

    public function get_all(){
        $query = $this->db->get('news');
	    return $query->result();
    }
}