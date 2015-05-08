<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Edituser extends CI_Controller {
	
	public function index() {
	
		$this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        $this->form_validation->set_rules('notabeledit', 'User ID', 'required|is_unique[login_session.id]');
        
		if ($this->form_validation->run() == FALSE) //berarti id terdapat di database
        {
			$uid = $this->input->post('notabeledit',TRUE);
			$result = $this->model_user->get_value($uid)->row();
			$data_array = array (
						'ID' => $result->id,
						'Username' => $result->username,
						'Password' => $result->password,
						'Level' => $result->level
			);
			//$id = $result->id;
			//echo "User ID  :"." ".$result->id."<br>";
			//echo "Username :"." ".$result->username."<br>";
			//echo "Password :"." ".$result->password."<br>";
			//echo "Level    :"." ".$result->level."<br>";
			$this->load->view('admin/formedituser',$data_array);
		}
		else 
		{
			$data['username'] = $this->session->userdata('username');
			echo "<script>alert('ID user tidak terdapat di dalam tabel');history.go(-1);</script>";
			
			//if ($this->session->userdata('username')=='admin') {
				$this->load->view('admin/layout/wrapper_savefiles',$data);
			//}
			//else{
			//	$urls = $this->session->userdata('username').'/layout/wrapper_savefiles';
			//	redirect ($urls,$data);
			//}
		}
		
	}
}
	