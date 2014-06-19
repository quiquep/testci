<?php

Class User extends CI_Model{
	var $username;
	var $password;

 function check_database($username, $password){

   $this -> db -> select('id, username, password');
   $this -> db -> from('users');
   $this -> db -> where('username', $username);
   $this -> db -> where('password', MD5($password));
   $this -> db -> limit(1);

   $query = $this -> db -> get();

   if($query -> num_rows() == 1)
   {
     return $query->result();
   }
   else
   {
     return false;
   }
 }
 
 function create($username,$password){
 	
 	$this->username   = $username;
 	$this->password = MD5($password);
 	$this->load->database();
 	$this->db->insert('users', $this);
 }
 
 function getAll()
 {
 	$this->load->database();
 	$query = $this->db->get('users');
 	return $query->result('User');
 }
}
?>