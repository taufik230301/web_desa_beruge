<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct()
    {
		parent::__construct();
		$this->load->model('m_user');
	}

	public function index()
	{
		$this->load->view('register');
	}

	public function proses()
	{
		$username = $this->input->post("username");
		$email = $this->input->post("email");
		$no_hp = $this->input->post("no_hp");
		$password = $this->input->post("password");
		$re_password = $this->input->post("re_password");
		$id_user_level = 4;

		if($password == $re_password){
			$hasil = $this->m_user->pendaftaran_user($username,  $email, $no_hp, $password, $id_user_level);
	
			if($hasil==false){
				$this->session->set_flashdata('eror','eror');
			}else{
				$this->session->set_flashdata('input','input');
				redirect('login/index');
			}

		}else{
			$this->session->set_flashdata('password_err','password_err');
			redirect('register/index');
		}



	}
}
