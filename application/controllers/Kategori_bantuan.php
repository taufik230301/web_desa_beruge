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
    
    public function input_data_admin_utama(){
        if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {
            $kategori_bantuan = $this->input->post("kategori_bantuan");
            
    
            // echo $nama;
            // echo "<br>";
            // echo $username;
            // echo "<br>";
            // echo $password;
            // echo "<br>";
            // echo $no_hp;
            // echo "<br>";
            // echo $email;
            // echo "<br>";
            // echo $nik;
            // echo "<br>";
            // echo $tempat_lahir;
            // echo "<br>";
            // echo $tanggal_lahir;
            // echo "<br>";
            // echo $alamat;
            // echo "<br>";
            // echo $jenis_kelamin;
            // echo "<br>";
            // echo $pekerjaan;
            // echo "<br>";
            // echo $id_rt;
            // echo "<br>";
            // echo $id_kategori_kelas_ekonomi;
            // echo "<br>";
            // echo $kategori_bantuan;
            // echo "<br>";
            // die();
            $hasil = $this->m_kategori_bantuan->insert_data_kategori_bantuan($kategori_bantuan);
        
                if($hasil==false){
                    $this->session->set_flashdata('eror_input','eror_input');
                
                }else{
                    $this->session->set_flashdata('input','input');
                }
                redirect('Kategori_bantuan/view_admin_utama');
        }else{
    
            $this->session->set_flashdata('loggin_err','loggin_err');
            redirect('Login/index');
    
        }

    }

    public function edit_data_admin_utama(){
        if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {
            $kategori_bantuan = $this->input->post("kategori_bantuan");
            $id_kategori_bantuan = $this->input->post("id_kategori_bantuan");
            
    
            // echo $nama;
            // echo "<br>";
            // echo $username;
            // echo "<br>";
            // echo $password;
            // echo "<br>";
            // echo $no_hp;
            // echo "<br>";
            // echo $email;
            // echo "<br>";
            // echo $nik;
            // echo "<br>";
            // echo $tempat_lahir;
            // echo "<br>";
            // echo $tanggal_lahir;
            // echo "<br>";
            // echo $alamat;
            // echo "<br>";
            // echo $jenis_kelamin;
            // echo "<br>";
            // echo $pekerjaan;
            // echo "<br>";
            // echo $id_rt;
            // echo "<br>";
            // echo $id_kategori_kelas_ekonomi;
            // echo "<br>";
            // echo $kategori_bantuan;
            // echo "<br>";
            // die();
            $hasil = $this->m_kategori_bantuan->update_data_kategori_bantuan($kategori_bantuan, $id_kategori_bantuan);
        
                if($hasil==false){
                    $this->session->set_flashdata('eror_edit','eror_edit');
                
                }else{
                    $this->session->set_flashdata('edit','edit');
                }
                redirect('Kategori_bantuan/view_admin_utama');
        }else{
    
            $this->session->set_flashdata('loggin_err','loggin_err');
            redirect('Login/index');
    
        }

    }

}