<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index() {
		if ($this->session->userdata('logged_in')=='Sudah Loggin')
		{
			if ($this->session->userdata('level')=='admin') {
				redirect('admin/c_admin');
			}
			else{
				$urls = $this->session->userdata('level').'/c_member';
				redirect ($urls);
			}
			
			//elseif ($this->session->userdata('level')=='member') {
			//	redirect('member/c_member');
			//}
			
			//redirect('admin/c_admin');
		}
		else 
		{
			$this->load->view('layout/wrapper');
			//$this->load->view('loginpage');
		}
	}

	public function cek_login() {
		
		$this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
			
		if ($this->form_validation->run() == FALSE)
        {
            //$this->load->view('layout/wrapper');
			$this->load->view('layout_loginpage/wrapper_loginpage');
		}
        else
        {
		$data = array('username' => $this->input->post('username', TRUE),
						'password' => $this->input->post('password', TRUE)
			);
		$this->load->model('model_user'); // load model_user
		$hasil = $this->model_user->cek_user($data);
		if ($hasil->num_rows() == 1) {
			foreach ($hasil->result() as $sess) {
				$sess_data['logged_in'] = 'Sudah Loggin';
				$sess_data['uid'] = $sess->uid;
				$sess_data['username'] = $sess->username;
				$sess_data['level'] = $sess->level;
				$this->session->set_userdata($sess_data);
			}
			if ($this->session->userdata('level')=='admin') {
				redirect('admin/c_admin');
			}
			else{
				$urls = $this->session->userdata('level').'/c_member';
				redirect ($urls);
			}
			//elseif ($this->session->userdata('level')=='member') {
			//	redirect('member/c_member');
			//}		
		}
		else {
			echo "<script>alert('Username dan Password tidak cocok!');history.go(-1);</script>";
		}
		
		}
	}

}

?>