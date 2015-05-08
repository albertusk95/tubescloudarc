<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Edituser_controller extends CI_Controller {
	
	public function edituser($uservalue) {
		
			$new_user = $this->input->post('usernamebaru', TRUE);
			
			$path1 = 'application/controllers/'.$uservalue;
			$path2 = 'application/controllers/'.$new_user;
			
			$path3 = 'application/views/'.$uservalue;
			$path4 = 'application/views/'.$new_user;
			
			rename ($path1, $path2); //mengganti nama folder di controller sesuai hasil edit user
			rename ($path3, $path4); //mengganti nama folder di view sesuai hasil edit user

			copy ("application/controllers/member/c_member.php", $path2."/c_member.php");
			
			$myfile = fopen ($path2."/c_member.php", "w") or die("Tidak dapat membuka/membuat file!");
			
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
				14 => $this->input->post('usernamebaru', TRUE),
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
			
			//echo "<script>alert('Edit user berhasil dilakukan');history.go(-1);</script>";
			
			$this->load->view('admin/scriptedituser');
	}

}
	