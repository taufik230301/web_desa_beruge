<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct()
    {
		parent::__construct();
		$this->load->model('m_user');
		$this->load->model('m_kegiatan');
	}
	public function view_admin_utama()
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {

		$data['penduduk_bantuan_tunai_langsung'] = $this->m_user->get_penduduk_bantuan_tunai_langsung()->row_array();
		$data['penduduk_bantuan_tunai_bupati'] = $this->m_user->get_penduduk_bantuan_tunai_bupati()->row_array();
		$data['penduduk_mampu'] = $this->m_user->get_penduduk_mampu()->row_array();
		$data['penduduk_tidak_mampu'] = $this->m_user->get_penduduk_tidak_mampu()->row_array();
		$data['penduduk'] = $this->m_user->get_penduduk()->row_array();
		$data['kegiatan'] = $this->m_kegiatan->get_total_kegiatan()->row_array();
		$this->load->view('admin_utama/dashboard', $data);

	}else{

		$this->session->set_flashdata('loggin_err','loggin_err');
		redirect('Login/index');

	}
}
	
    public function view_admin_pkh()
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 2) {
			$data['penduduk_bantuan_tunai_langsung'] = $this->m_user->get_penduduk_bantuan_tunai_langsung()->row_array();
			$data['penduduk_bantuan_tunai_bupati'] = $this->m_user->get_penduduk_bantuan_tunai_bupati()->row_array();
			$data['penduduk_mampu'] = $this->m_user->get_penduduk_mampu()->row_array();
			$data['penduduk_tidak_mampu'] = $this->m_user->get_penduduk_tidak_mampu()->row_array();
			$data['penduduk'] = $this->m_user->get_penduduk()->row_array();
			$data['kegiatan'] = $this->m_kegiatan->get_total_kegiatan()->row_array();

		$this->load->view('admin_pkh/dashboard', $data);

	}else{

		$this->session->set_flashdata('loggin_err','loggin_err');
		redirect('Login/index');
	}
	}
	
    public function view_admin_rt()
	{
		
	if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 3) {
		$data['penduduk'] = $this->m_user->get_penduduk_by_id_rt($this->session->userdata('id_rt'))->row_array();
		$this->load->view('admin_rt/dashboard', $data);

	}else{

		$this->session->set_flashdata('loggin_err','loggin_err');
		redirect('Login/index');
	}
	}
	
    public function view_masyarakat()
	{

	if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 4) {
			$data['penduduk_bantuan_tunai_langsung'] = $this->m_user->get_penduduk_bantuan_tunai_langsung()->row_array();
			$data['penduduk_bantuan_tunai_bupati'] = $this->m_user->get_penduduk_bantuan_tunai_bupati()->row_array();
			$data['penduduk_mampu'] = $this->m_user->get_penduduk_mampu()->row_array();
			$data['penduduk_tidak_mampu'] = $this->m_user->get_penduduk_tidak_mampu()->row_array();
			$data['penduduk'] = $this->m_user->get_penduduk()->row_array();
			$data['kegiatan'] = $this->m_kegiatan->get_total_kegiatan()->row_array();

		$this->load->view('masyarakat/dashboard', $data);

	}else{

		$this->session->set_flashdata('loggin_err','loggin_err');
		redirect('Login/index');
	}
	}
}