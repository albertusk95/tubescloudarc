<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Deleteuser extends CI_Controller {
	
	public function index() {
		$this->load->helper(array('form', 'url'));

        $this->load->library('form_validation');

        $this->form_validation->set_rules('notabeldelete', 'User ID', 'required|is_unique[login_session.id]');
        
		if ($this->form_validation->run() == FALSE) //berarti id terdapat di database
        {
			echo " 	<script>
					var answer = confirm('Anda yakin ingin meneruskan?')
						if (answer){
							";
							//$id_del['id_value'] = $this->input->post('notabeldelete',TRUE);
							//$this->load->view('admin/scriptdeleteuser',$id_del);
							
							$uid = $this->input->post('notabeldelete',TRUE);
							$result = $this->model_user->get_value($uid)->row();
							$data_array = array (
								'ID' => $result->id,
								'Username' => $result->username,
								'Password' => $result->password,
								'Level' => $result->level
							);
							$data_array['id_value'] = $this->input->post('notabeldelete',TRUE);
			$this->load->view('admin/formdeleteuser',$data_array);
							
							
							
			echo "
						}
						else{
							history.go(-1);
							"
							;
							$data['username'] = $this->session->userdata('username');
							$this->load->view('admin/layout/wrapper_savefiles',$data);
			echo 	"
						}
					</script>";
		}
		
		else
		{
			$data['username'] = $this->session->userdata('username');
			echo "<script>alert('ID user tidak terdapat di dalam tabel');history.go(-1);</script>";
			$this->load->view('admin/layout/wrapper_savefiles',$data);
		}
	}

}