<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
    {
		parent::__construct();
		$this->load->model('m_user');
	}

	public function index()
	{
		$this->load->view('login');
	}



	public function proses(){
		$username = $this->input->post("username");
		$password = $this->input->post("password");

		$user = $this->m_user->cek_user($username, $password);

		
		if ($user->num_rows()>0){
			$user = $user->row_array();

			if($user['id_user_level'] == 1){

				$this->session->set_userdata('logged_in', true);
				$this->session->set_userdata('id', $user['id']);
				$this->session->set_userdata('username', $user['username']);
				$this->session->set_userdata('nama', $user['nama']);
				$this->session->set_userdata('email', $user['email']);
				$this->session->set_userdata('id_user_level', $user['id_user_level']);
				$this->session->set_flashdata('login_success','login_success');
				redirect('dashboard/view_admin_utama');

			}else if($user['id_user_level'] == 2){

				$this->session->set_userdata('logged_in', true);
				$this->session->set_userdata('id', $user['id']);
				$this->session->set_userdata('username', $user['username']);
				$this->session->set_userdata('nama', $user['nama']);
				$this->session->set_userdata('email', $user['email']);
				$this->session->set_userdata('id_user_level', $user['id_user_level']);
				$this->session->set_flashdata('login_success','login_success');
				redirect('dashboard/view_admin_pkh');

			}
			else if($user['id_user_level'] == 3){

				$this->session->set_userdata('logged_in', true);
				$this->session->set_userdata('id', $user['id']);
				$this->session->set_userdata('id_rt', $user['id_rt']);
				$this->session->set_userdata('username', $user['username']);
				$this->session->set_userdata('nama', $user['nama']);
				$this->session->set_userdata('email', $user['email']);
				$this->session->set_userdata('id_user_level', $user['id_user_level']);
				$this->session->set_flashdata('login_success','login_success');
				redirect('dashboard/view_admin_rt');

			}else if($user['id_user_level'] == 4){

				$this->session->set_userdata('logged_in', true);
				$this->session->set_userdata('id', $user['id']);
				$this->session->set_userdata('username', $user['username']);
				$this->session->set_userdata('nama', $user['nama']);
				$this->session->set_userdata('email', $user['email']);
				$this->session->set_userdata('id_user_level', $user['id_user_level']);
				$this->session->set_flashdata('login_success','login_success');
				redirect('dashboard/view_masyarakat');

			}else{
				$this->session->set_flashdata('loggin_err','loggin_err');
				redirect('Login/index');
			}
		}else{
			$this->session->set_flashdata('loggin_err_no_user','loggin_err_no_user');
			redirect('Login/index');
		}
	}

	public function log_out(){
		$this->session->sess_destroy();
            redirect('Login/index');
	}
}
