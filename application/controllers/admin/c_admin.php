<?php
//session_start();
class C_admin extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this->session->userdata('username')=="") {
			redirect('auth');
		}
		$this->load->helper('text');
	}
	public function index() {
		
		if ($this->session->userdata('username') == 'admin')
		{
		$data['username'] = $this->session->userdata('username');
		$this->load->view('admin/layout/wrapper_savefiles', $data);
		}
		else
		{
			$urls = $this->session->userdata('username').'/c_member';
			redirect ($urls);
		}
	}

	public function logout() {
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('level');
		session_destroy();
		redirect('auth');
	}
}
?>