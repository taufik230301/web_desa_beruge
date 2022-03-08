<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends CI_Controller {
	public function __construct()
    {
		parent::__construct();
		$this->load->model('m_kegiatan');
	}

	public function view_admin_utama()
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {

			$data['kegiatan'] = $this->m_kegiatan->get_kegiatan()->result_array();
			$this->load->view('admin_utama/kegiatan', $data);

		}else{

			$this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');

		}
	}
	
	public function input_data_admin_utama(){
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {
			$nama_kegiatan = $this->input->post("nama_kegiatan");

			echo $nama_kegiatan;
			echo "<br>";
			die();

		}else{

			$this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');

		}
	}
    
}
