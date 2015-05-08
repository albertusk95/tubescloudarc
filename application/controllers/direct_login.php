<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//session_start();
class Direct_login extends CI_Controller {
	
	public function index() 
	{
		if ($this->session->userdata('logged_in')=='Sudah Loggin')
		{
			if ($this->session->userdata('username') == 'admin')
			{
				redirect('admin/c_admin');
			}
			else
			{
				$urls = $this->session->userdata('username').'/c_member';
				redirect ($urls);
			}
		}
		else
		{
		$this->load->view('layout_loginpage/wrapper_loginpage');
		}
	}
}

?>