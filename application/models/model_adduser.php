<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_adduser extends CI_Model { 
 
    public function tambah() {
     
		$newuser  = $this->input->post('newuser');
        $passnewuser = $this->input->post('passnewuser');
		
        $data = array (
			'username' => $newuser,
			'password' => $passnewuser,
			'level' => $newuser
        );  
		
        $this->db->insert('login_session',$data);
    }
}
?>