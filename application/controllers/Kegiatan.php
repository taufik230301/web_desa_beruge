<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends CI_Controller {
	public function __construct()
    {
		parent::__construct();
		$this->load->model('m_kegiatan');
	}

	public function view_admin_utama()
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {

			$data['kegiatan'] = $this->m_kegiatan->get_kegiatan()->result_array();
			$this->load->view('admin_utama/kegiatan', $data);

		}else{

			$this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');

		}
	}
	
	public function input_data_admin_utama(){
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {
			$nama_kegiatan = $this->input->post("nama_kegiatan");
			$keterangan = $this->input->post("keterangan");
			$tgl_kegiatan = $this->input->post("tgl_kegiatan");
			$file_name = md5($nama_kegiatan.$keterangan);
			$id_penulis = $this->session->userdata('id');
			// echo $nama_kegiatan;
			// echo "<br>";
			// echo $keterangan;
			// echo "<br>";
			// echo $tgl_kegiatan;
			// echo "<br>";
			// echo $file_name;
			// echo "<br>";
			// die();

		$path = './assets/kegiatan/';



		$this->load->library('upload');
		$config['upload_path'] = './assets/kegiatan';
		$config['allowed_types'] = 'pdf|docx|jpg|png';
		$config['max_size'] = '4048';  //2MB max
		$config['max_width'] = '4480'; // pixel
		$config['max_height'] = '4480'; // pixel
		$config['file_name'] = $file_name;
		$this->upload->initialize($config);
		$foto_kegiatan = $this->upload->do_upload('foto_kegiatan');

			if($foto_kegiatan){
				$foto_kegiatan = $this->upload->data();
			}else{
				$this->session->set_flashdata('error_fil','error_file');
				redirect('Kegiatan/view_admin_utama');
			}
			
			$hasil = $this->m_kegiatan->insert_data_kegiatan($nama_kegiatan,  $foto_kegiatan['file_name'], $keterangan, $tgl_kegiatan, $id_penulis);
	
			if($hasil==false){
				$this->session->set_flashdata('eror','eror');
			
			}else{
				$this->session->set_flashdata('input','input');
			
			}
			redirect('Kegiatan/view_admin_utama');

		}else{

			$this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');

		}
	}

	public function edit_data_admin_utama(){
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {
			$id = $this->input->post("id");
			$nama_kegiatan = $this->input->post("nama_kegiatan");
			$keterangan = $this->input->post("keterangan");
			$tgl_kegiatan = $this->input->post("tgl_kegiatan");
			$foto_kegiatan_old = $this->input->post("foto_kegiatan_old");
			$file_name = md5($nama_kegiatan.$keterangan);

			// echo $nama_kegiatan;
			// echo "<br>";
			// echo $keterangan;
			// echo "<br>";
			// echo $tgl_kegiatan;
			// echo "<br>";
			// echo $file_name;
			// echo "<br>";
			// echo $foto_kegiatan_old;
			// echo "<br>";
			// die();

		$path = './assets/kegiatan/';



		$this->load->library('upload');
		$config['upload_path'] = './assets/kegiatan';
		$config['allowed_types'] = 'pdf|docx|jpg|png';
		$config['max_size'] = '4048';  //2MB max
		$config['max_width'] = '4480'; // pixel
		$config['max_height'] = '4480'; // pixel
		$config['file_name'] = $file_name;
		$this->upload->initialize($config);
		$foto_kegiatan = $this->upload->do_upload('foto_kegiatan');

			if($foto_kegiatan){
				$foto_kegiatan = $this->upload->data();
			}else{
				$this->session->set_flashdata('error_fil','error_file');
				redirect('Kegiatan/view_admin_utama');
			}
			
			$hasil = $this->m_kegiatan->edit_data_kegiatan($nama_kegiatan,  $foto_kegiatan['file_name'], $keterangan, $tgl_kegiatan, $id);
	
			if($hasil==false){
				$this->session->set_flashdata('eror','eror');
			
			}else{
				$this->session->set_flashdata('edit','edit');
			
			}
			
			@unlink($path.$this->input->post('foto_kegiatan_old'));
			redirect('Kegiatan/view_admin_utama');

		}else{

			$this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');

		}
	}

	public function hapus_data_admin_utama(){
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {
			$id = $this->input->post("id");

			// echo $nama_kegiatan;
			// echo "<br>";
			// echo $keterangan;
			// echo "<br>";
			// echo $tgl_kegiatan;
			// echo "<br>";
			// echo $file_name;
			// echo "<br>";
			// echo $id;
			// echo "<br>";
			// die();

			$path = './assets/kegiatan/';
			
			$hasil = $this->m_kegiatan->delete_data_kegiatan($id);
	
			if($hasil==false){
				$this->session->set_flashdata('eror','eror');
			
			}else{
				$this->session->set_flashdata('hapus','hapus');
			
			}
			
			@unlink($path.$this->input->post('foto_kegiatan_old'));
			redirect('Kegiatan/view_admin_utama');

		}else{

			$this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');

		}
	}
    
}
