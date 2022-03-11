<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web_Public extends CI_Controller {
	public function __construct()
    {
		parent::__construct();
		$this->load->model('m_user');
		$this->load->model('m_kegiatan');
	}

	public function index()
	{
			$data['penduduk_bantuan_tunai_langsung'] = $this->m_user->get_penduduk_bantuan_tunai_langsung()->row_array();
			$data['penduduk_bantuan_tunai_bupati'] = $this->m_user->get_penduduk_bantuan_tunai_bupati()->row_array();
			$data['penduduk_mampu'] = $this->m_user->get_penduduk_mampu()->row_array();
			$data['penduduk_tidak_mampu'] = $this->m_user->get_penduduk_tidak_mampu()->row_array();
			$data['penduduk'] = $this->m_user->get_penduduk()->row_array();
			$data['kegiatan_total'] = $this->m_kegiatan->get_total_kegiatan()->row_array();
			$data['kegiatan'] = $this->m_kegiatan->get_kegiatan()->result_array();
			
		$this->load->view('web_public/home', $data);
	}
	
	public function detail_kegiatan($id)
	{
		$data['kegiatan'] = $this->m_kegiatan->get_kegiatan_by_id($id)->result_array();
		$this->load->view('web_public/detail_kegiatan', $data);
    }
    
}