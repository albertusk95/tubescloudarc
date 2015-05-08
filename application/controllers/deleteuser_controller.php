<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Deleteuser_controller extends CI_Controller {
	
	public function deleteuser($uservalue,$idvalue) {
			
			$path['path_1'] = 'application/controllers/'.$uservalue;
			$path['path_2'] = 'application/views/'.$uservalue;
			$path['path_id'] = $idvalue;
			$this->load->view('admin/deletefunction',$path);
	}

}

