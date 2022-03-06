<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends CI_Controller {
	public function view_admin_utama()
	{
		$this->load->view('admin_utama/kegiatan');
    }
    
}
