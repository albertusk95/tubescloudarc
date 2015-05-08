<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Newfolder extends CI_Controller {
	
	public function index()
	{
		//membuat folder baru sesuai permintaan
		$urls = 'application/uploaded/';
		mkdir($urls.$this->input->post('newfolder', TRUE),0777,TRUE);
	}
	
}

?>

