<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saran extends CI_Controller {
	public function __construct()
    {
		parent::__construct();
		$this->load->model('m_user');
		$this->load->model('m_kegiatan');
		$this->load->model('m_saran');
	}

	public function view_admin_utama()
	{
		$data['saran'] = $this->m_saran->get_saran()->result_array();
		$this->load->view('admin_utama/saran', $data);
    }
    
    public function hapus_data_admin_utama(){
        if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {
            $id_saran = $this->input->post("id_saran");
            
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
            // echo $kategori_kelas_ekonomi;
            // echo "<br>";
            // die();

            $hasil = $this->m_saran->delete_data_penduduk($id_saran);

                if($hasil==false){
                    $this->session->set_flashdata('eror_delete','eror_delete');
                
                }else{
                    $this->session->set_flashdata('delete','delete');
                }

                redirect('Saran/view_admin_utama');
                
        }else{
    
            $this->session->set_flashdata('loggin_err','loggin_err');
            redirect('Login/index');
    
        }

    }
	
	
    
}