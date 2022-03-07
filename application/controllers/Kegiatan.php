<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends CI_Controller {
	public function view_admin_utama()
	{
	if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {

		$this->load->view('admin_utama/kegiatan');
		
	}else{

		$this->session->set_flashdata('loggin_err','loggin_err');
		redirect('Login/index');

	}
    }
    
}
