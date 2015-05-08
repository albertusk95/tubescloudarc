<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Adduser extends CI_Controller {
	
		public function cek_register() {
		
		$this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        $this->form_validation->set_rules('newuser', 'Username', 'required|is_unique[login_session.username]');
        $this->form_validation->set_rules('passnewuser', 'Password', 'required');
			
		if ($this->form_validation->run() == FALSE)
        {
			$data['username'] = $this->session->userdata('username');
			echo "<script>alert('Masih terdapat kesalahan!');history.go(-1);</script>";
			$this->load->view('admin/layout/wrapper_savefiles',$data);
		}
		else 
		{
			$urls = 'application/controllers/';
			mkdir($urls.$this->input->post('newuser', TRUE),0777,TRUE);
			$urls = $urls.$this->input->post('newuser', TRUE).'/';
		
			//mkdir ($urls.'hasil',0777,TRUE);
			$myfile = fopen($urls."c_member.php", "w") or die("Unable to open/create file!");
			fclose ($myfile);
			copy ("application/controllers/member/c_member.php", $urls."c_member.php");
			$myfile = fopen($urls."c_member.php", "r") or die("Unable to open/create file!");
			$a = 0;
			while(!feof($myfile)) {
				
				$get_isi[$a] = fgets($myfile);
				
				
				$a = $a + 1;
			}
			fclose($myfile);
			$myfile = fopen ($urls."c_member.php", "w") or die("Unable to open/create file!");
			$b=1;
			
			$isi = array (
				1 => "<?php
//session_start();
class C_member extends CI_Controller {
		public function __construct() {
			parent::__construct();
				if ($",

				2 => "this",
				3 => "->session->userdata('username')==",
				4 => '"") {',
				5 => "redirect('auth'); ",
				6 => '}
				$',
				7 => "this->load->helper('text');
		}
		public function index() {
			$",
				8 => "data[",
				9 => "'username'",
				10 => "]=",
				11 => "$",
				12 => "this->session->userdata('username'); 
				$",
				13 => "this->load->view('",
				14 => $this->input->post('newuser', TRUE),
				15 => "/layout/wrapper_savefiles',",
				16 => "$",
				17 => "data);
		}
		public function logout() {
				$",
				18 => "this->session->unset_userdata('username'); 
				$",
				19 => "this->session->unset_userdata('level');
				session_destroy(); 
				redirect('auth');",
				20 => '}
}
?>'			
			);
			
			while ($b<=20)
			{
			fwrite($myfile,$isi[$b]);
			$b = $b + 1;
			}
			fclose ($myfile);
			
			$urls = 'application/views/';
			mkdir($urls.$this->input->post('newuser', TRUE),0777,TRUE);
			$urls = $urls.$this->input->post('newuser', TRUE).'/';
			mkdir ($urls.'home',0777,TRUE);
			mkdir ($urls.'layout',0777,TRUE);
			
			copy ("application/views/member/home/index_home_savefiles.php", $urls."home/index_home_savefiles.php");
			copy ("application/views/member/layout/footer_savefiles.php", $urls."layout/footer_savefiles.php");
			copy ("application/views/member/layout/head_savefiles.php", $urls."layout/head_savefiles.php");
			copy ("application/views/member/layout/konten_savefiles.php", $urls."layout/konten_savefiles.php");
			copy ("application/views/member/layout/wrapper_savefiles.php", $urls."layout/wrapper_savefiles.php");
			copy ("application/views/member/layout/header_savefiles.php", $urls."layout/header_savefiles.php");
			
			
            $this->model_adduser->tambah();
            $this->load->view('admin/scriptadduser');
			
			$data['username'] = $this->session->userdata('username');
			echo "<script>alert('User baru berhasil ditambahkan');history.go(-1);</script>";
			$this->load->view('admin/layout/wrapper_savefiles',$data);
			
			
		}
        
	}
}


