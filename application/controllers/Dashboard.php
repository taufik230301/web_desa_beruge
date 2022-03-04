<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function view_admin_utama()
	{
		$this->load->view('admin_utama/dashboard');
    }
    public function view_admin_pkh()
	{
		$this->load->view('admin_pkh/dashboard');
    }
    public function view_admin_rt()
	{
		$this->load->view('admin_rt/dashboard');
    }
    public function view_masyarakat()
	{
		$this->load->view('masyarakat/dashboard');
	}
}
