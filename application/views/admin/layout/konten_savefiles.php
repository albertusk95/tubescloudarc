<?php
	if (! defined('BASEPATH')) exit ('No direct script access allowed');
	
	$isi='admin/home/index_home_savefiles';
	if ($isi) {
		$this->load->view($isi);
	}