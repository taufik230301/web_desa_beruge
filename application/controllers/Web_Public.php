<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web_Public extends CI_Controller {

	public function index()
	{
		$this->load->view('web_public/home');
	}
	
	public function detail_kegiatan()
	{
		$this->load->view('web_public/detail_kegiatan');
    }
    
}