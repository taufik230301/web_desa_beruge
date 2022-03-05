<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_penduduk extends CI_Controller {
	public function view_admin_utama()
	{
		$this->load->view('admin_utama/data_penduduk');
    }
    public function view_admin_pkh()
	{
		$this->load->view('admin_pkh/data_penduduk');
    }
    public function view_admin_rt()
	{
		$this->load->view('admin_rt/data_penduduk');
    }
    public function view_masyarakat()
	{
		$this->load->view('masyarakat/data_penduduk');
	}
}
