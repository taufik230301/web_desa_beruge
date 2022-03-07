<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_penduduk extends CI_Controller {
	public function view_admin_utama()
	{
	if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {

		$this->load->view('admin_utama/data_penduduk');

	}else{

		$this->session->set_flashdata('loggin_err','loggin_err');
		redirect('Login/index');

	}
	}

	public function input_data_penduduk(){
	if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {
		$username = $this->input->post("username");

		echo $username;
		echo "<br>";
		die();

	}else{

		$this->session->set_flashdata('loggin_err','loggin_err');
		redirect('Login/index');

	}

	}
	
    public function view_admin_pkh()
	{

	if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 2) {

		$this->load->view('admin_pkh/data_penduduk');

	}else{

		$this->session->set_flashdata('loggin_err','loggin_err');
		redirect('Login/index');

	}
	}
	
    public function view_admin_rt()
	{
	if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 3) {

		$this->load->view('admin_rt/data_penduduk');

	}else{

		$this->session->set_flashdata('loggin_err','loggin_err');
		redirect('Login/index');

	}
	}
	
    public function view_masyarakat()
	{
	if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 4) {

		$this->load->view('masyarakat/data_penduduk');

	}else{

		$this->session->set_flashdata('loggin_err','loggin_err');
		redirect('Login/index');

	}
	}

}
