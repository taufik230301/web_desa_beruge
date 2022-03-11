<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_bantuan extends CI_Controller {

    public function __construct()
    {
		parent::__construct();
		$this->load->model('m_kategori_bantuan');
    }
    
    public function view_admin_utama()
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {

			$data['kategori_bantuan'] = $this->m_kategori_bantuan->get_kategori_bantuan()->result_array();
			$this->load->view('admin_utama/kategori_bantuan', $data);

		}else{

			$this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');

		}
	}

}