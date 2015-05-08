<?php
	if (! defined('BASEPATH')) exit ('No direct script access allowed');
	
	$isi='home/index_home';
	if ($isi) {
		$this->load->view($isi);
	}