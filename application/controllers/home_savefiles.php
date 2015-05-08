<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_savefiles extends CI_Controller {
 public function index() {
 $data=array('title'=>'SaveYourFiles',
 'isi' =>'admin/home/index_home_savefiles'
 );
 $this->load->view('admin/layout/wrapper_savefiles',$data); 
 }
}