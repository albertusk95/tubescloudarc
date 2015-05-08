<?php

class Form extends CI_Controller {

        public function index()
        {
                $this->load->helper(array('form', 'url'));

                $this->load->library('form_validation');

                $this->form_validation->set_rules('username_signup', 'Username', 'required|valid_email');
                $this->form_validation->set_rules('password_signup', 'Password', 'required');
                $this->form_validation->set_rules('confpassword_signup', 'Confirm Password', 'required|matches[password_signup]');
            
			
			
                if ($this->form_validation->run() == FALSE)
                {
                        $this->load->view('layout/wrapper');
                }
                else
                {
                        $this->load->view('folder1/formsuccess');
				}
        }
		
}