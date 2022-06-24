<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class ForgotPassword extends CI_Controller {

    public function __construct()
    {
		parent::__construct();
		$this->load->model('m_user');
	}

	public function index()
	{
		$this->load->view('forgot');
    }

    public function proses()
    {
        $email = $this->input->post("email");

        $user = $this->m_user->cek_email($email);
        
        if ($user->num_rows()>0){
            
        }else{

        }
    }

}