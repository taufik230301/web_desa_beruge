<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_penduduk extends CI_Controller {
	public function __construct()
    {
		parent::__construct();
		$this->load->model('m_user');
		$this->load->model('m_rt');
		$this->load->model('m_kategori_kelas_ekonomi');
		$this->load->model('m_kategori_bantuan');
	}
	public function view_admin_utama()
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {
			$data['data_penduduk'] = $this->m_user->get_user_penduduk()->result_array();
			$data['rt_data'] = $this->m_rt->get_rt()->result_array();
			$data['kategori_kelas_ekonomi_data'] = $this->m_kategori_kelas_ekonomi->get_kategori_kelas_ekonomi()->result_array();
			$data['kategori_bantuan_data'] = $this->m_kategori_bantuan->get_kategori_bantuan()->result_array();

			$this->load->view('admin_utama/data_penduduk', $data);

		}else{

			$this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');

		}
	}

	public function view_admin_utama_filter_kelas_ekonomi($id)
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {
			$data['data_penduduk'] = $this->m_user->get_user_penduduk_by_kelas_ekonomi($id)->result_array();
			$data['rt_data'] = $this->m_rt->get_rt()->result_array();
			$data['kategori_kelas_ekonomi_data'] = $this->m_kategori_kelas_ekonomi->get_kategori_kelas_ekonomi()->result_array();
			$data['kategori_bantuan_data'] = $this->m_kategori_bantuan->get_kategori_bantuan()->result_array();

			$this->load->view('admin_utama/data_penduduk', $data);

		}else{

			$this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');

		}
	}

	public function view_admin_utama_filter_rt($id)
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {
			$data['data_penduduk'] = $this->m_user->get_user_penduduk_by_nomor_rt($id)->result_array();
			$data['rt_data'] = $this->m_rt->get_rt()->result_array();
			$data['kategori_kelas_ekonomi_data'] = $this->m_kategori_kelas_ekonomi->get_kategori_kelas_ekonomi()->result_array();
			$data['kategori_bantuan_data'] = $this->m_kategori_bantuan->get_kategori_bantuan()->result_array();

			$this->load->view('admin_utama/data_penduduk', $data);

		}else{

			$this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');

		}
	}

	public function input_data_admin_utama(){
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {
			$nama = $this->input->post("nama");
			$username = $this->input->post("username");
			$password = $this->input->post("password");
			$no_hp = $this->input->post("no_hp");
			$email = $this->input->post("email");
			$nik = $this->input->post("nik");
			$tempat_lahir = $this->input->post("tempat_lahir");
			$tanggal_lahir = $this->input->post("tanggal_lahir");
			$alamat = $this->input->post("alamat");
			$jenis_kelamin = $this->input->post("jenis_kelamin");
			$pekerjaan = $this->input->post("pekerjaan");
			$id_rt = $this->input->post("id_rt");
			$id_kategori_kelas_ekonomi = $this->input->post("id_kategori_kelas_ekonomi");
			$id_kategori_bantuan = $this->input->post("id_kategori_bantuan");
			$keterangan = $this->input->post("keterangan");
			$id_user_level = 4;

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
			// echo $id_kategori_bantuan;
			// echo "<br>";
			// die();
			$hasil = $this->m_user->insert_data_penduduk($username, $password, $nama, $email, $no_hp, $id_user_level, $nik, $tempat_lahir, $tanggal_lahir, $alamat, $jenis_kelamin, $pekerjaan, $id_rt, $id_kategori_bantuan, $id_kategori_kelas_ekonomi, $keterangan);
		
				if($hasil==false){
					$this->session->set_flashdata('eror_input','eror_input');
				
				}else{
					$this->session->set_flashdata('input','input');
				}
				redirect('Data_penduduk/view_admin_utama');
		}else{

			$this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');

		}

	}

	public function edit_data_admin_utama(){
			if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {
				$nama = $this->input->post("nama");
				$username = $this->input->post("username");
				$password = $this->input->post("password");
				$no_hp = $this->input->post("no_hp");
				$email = $this->input->post("email");
				$nik = $this->input->post("nik");
				$tempat_lahir = $this->input->post("tempat_lahir");
				$tgl_lahir = $this->input->post("tanggal_lahir");
				$alamat = $this->input->post("alamat");
				$jenis_kelamin = $this->input->post("jenis_kelamin");
				$pekerjaan = $this->input->post("pekerjaan");
				$id_rt = $this->input->post("id_rt");
				$id_kategori_kelas_ekonomi = $this->input->post("id_kategori_kelas_ekonomi");
				$id_kategori_bantuan = $this->input->post("id_kategori_bantuan");
				$keterangan = $this->input->post("keterangan");
				$nama = $this->input->post("nama");
				$id = $this->input->post("id");
				$id_user_detail = $this->input->post("id_user_detail");
				$id_user_level = 4;
		
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
				// echo $id_kategori_bantuan;
				// echo "<br>";
				// echo $id;
				// echo "<br>";
				// die();

				$hasil = $this->m_user->update_data_penduduk($username, $password, $nama, $email, $no_hp, $id_user_level, $nik, $tempat_lahir, $tgl_lahir, $alamat, $jenis_kelamin, $pekerjaan, $id_rt, $id_kategori_bantuan, $id_kategori_kelas_ekonomi, $keterangan, $id, $id_user_detail);
			
					if($hasil==false){
						$this->session->set_flashdata('eror_edit','eror_edit');
					
					}else{
						$this->session->set_flashdata('edit','edit');
					}
					redirect('Data_penduduk/view_admin_utama');
			}else{
		
				$this->session->set_flashdata('loggin_err','loggin_err');
				redirect('Login/index');
		
			}
	
		}

		public function hapus_data_admin_utama(){
			if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {

				$id = $this->input->post("id");
				$id_user_detail = $this->input->post("id_user_detail");

				$hasil = $this->m_user->delete_data_penduduk($id, $id_user_detail );
		
				if($hasil==false){
					$this->session->set_flashdata('eror_hapus','eror_hapus');
				}else{
					$this->session->set_flashdata('hapus','hapus');
				}
				redirect('Data_penduduk/view_admin_utama');
			}else{
	
				$this->session->set_flashdata('loggin_err','loggin_err');
				redirect('Login/index');
		
			}
		}
	
    public function view_admin_pkh()
	{

		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 2) {
			$data['data_penduduk'] = $this->m_user->get_user_penduduk()->result_array();
			$data['rt_data'] = $this->m_rt->get_rt()->result_array();
			$data['kategori_kelas_ekonomi_data'] = $this->m_kategori_kelas_ekonomi->get_kategori_kelas_ekonomi()->result_array();
			$data['kategori_bantuan_data'] = $this->m_kategori_bantuan->get_kategori_bantuan()->result_array();
			$this->load->view('admin_pkh/data_penduduk', $data);

		}else{

			$this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');

		}
	}

	public function view_admin_pkh_filter_kelas_ekonomi($id)
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 2) {
			$data['data_penduduk'] = $this->m_user->get_user_penduduk_by_kelas_ekonomi($id)->result_array();
			$data['rt_data'] = $this->m_rt->get_rt()->result_array();
			$data['kategori_kelas_ekonomi_data'] = $this->m_kategori_kelas_ekonomi->get_kategori_kelas_ekonomi()->result_array();
			$data['kategori_bantuan_data'] = $this->m_kategori_bantuan->get_kategori_bantuan()->result_array();

			$this->load->view('admin_pkh/data_penduduk', $data);

		}else{

			$this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');

		}
	}

	public function input_data_admin_pkh(){
			if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 2) {
				$nama = $this->input->post("nama");
				$username = $this->input->post("username");
				$password = $this->input->post("password");
				$no_hp = $this->input->post("no_hp");
				$email = $this->input->post("email");
				$nik = $this->input->post("nik");
				$tempat_lahir = $this->input->post("tempat_lahir");
				$tanggal_lahir = $this->input->post("tempat_lahir");
				$alamat = $this->input->post("alamat");
				$jenis_kelamin = $this->input->post("jenis_kelamin");
				$pekerjaan = $this->input->post("pekerjaan");
				$id_rt = $this->input->post("id_rt");
				$id_kategori_kelas_ekonomi = $this->input->post("id_kategori_kelas_ekonomi");
				$id_kategori_bantuan = $this->input->post("id_kategori_bantuan");
				$keterangan = $this->input->post("keterangan");
				$id_user_level = 4;
		
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
				// echo $id_kategori_bantuan;
				// echo "<br>";
				// die();
				$hasil = $this->m_user->insert_data_penduduk($username, $password, $nama, $email, $no_hp, $id_user_level, $nik, $tempat_lahir, $tgl_lahir, $alamat, $jenis_kelamin, $pekerjaan, $id_rt, $id_kategori_bantuan, $id_kategori_kelas_ekonomi, $keterangan);
			
					if($hasil==false){
						$this->session->set_flashdata('eror_input','eror_input');
					
					}else{
						$this->session->set_flashdata('input','input');
					}
					redirect('Data_penduduk/view_admin_pkh');
			}else{
		
				$this->session->set_flashdata('loggin_err','loggin_err');
				redirect('Login/index');
		
			}
	
		}

		public function edit_data_admin_pkh(){
			if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 2) {
				$id_kategori_kelas_ekonomi = $this->input->post("id_kategori_kelas_ekonomi");
				$id_kategori_bantuan = $this->input->post("id_kategori_bantuan");
				$id_user_detail = $this->input->post("id_user_detail");
		
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
				// echo $id_kategori_bantuan;
				// echo "<br>";
				// echo $id;
				// echo "<br>";
				// die();

				$hasil = $this->m_user->update_data_kategori_penduduk($id_kategori_bantuan, $id_kategori_kelas_ekonomi, $id_user_detail);
			
					if($hasil==false){
						$this->session->set_flashdata('eror_edit','eror_edit');
					
					}else{
						$this->session->set_flashdata('edit','edit');
					}
					redirect('Data_penduduk/view_admin_pkh');
			}else{
		
				$this->session->set_flashdata('loggin_err','loggin_err');
				redirect('Login/index');
		
			}
	
		}

		public function hapus_data_admin_rt(){
			if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 3) {

				$id = $this->input->post("id");
				$id_user_detail = $this->input->post("id_user_detail");

				$hasil = $this->m_user->delete_data_penduduk($id, $id_user_detail );
		
				if($hasil==false){
					$this->session->set_flashdata('eror_hapus','eror_hapus');
				}else{
					$this->session->set_flashdata('hapus','hapus');
				}
				redirect('Data_penduduk/view_admin_rt');
			}else{
	
				$this->session->set_flashdata('loggin_err','loggin_err');
				redirect('Login/index');
		
			}
		}
	
    public function view_admin_rt()
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 3) {
			$data['data_penduduk'] = $this->m_user->get_user_penduduk_by_id_rt($this->session->userdata('id_rt'))->result_array();
			$data['rt_data'] = $this->m_rt->get_rt()->result_array();
			$data['kategori_kelas_ekonomi_data'] = $this->m_kategori_kelas_ekonomi->get_kategori_kelas_ekonomi()->result_array();
			$data['kategori_bantuan_data'] = $this->m_kategori_bantuan->get_kategori_bantuan()->result_array();
			$this->load->view('admin_rt/data_penduduk', $data);

		}else{

			$this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');

		}
	}

	public function input_data_admin_rt(){
			if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 3) {
				$nama = $this->input->post("nama");
				$username = $this->input->post("username");
				$password = $this->input->post("password");
				$no_hp = $this->input->post("no_hp");
				$email = $this->input->post("email");
				$nik = $this->input->post("nik");
				$tempat_lahir = $this->input->post("tempat_lahir");
				$tanggal_lahir = $this->input->post("tempat_lahir");
				$alamat = $this->input->post("alamat");
				$jenis_kelamin = $this->input->post("jenis_kelamin");
				$pekerjaan = $this->input->post("pekerjaan");
				$id_rt = $this->input->post("id_rt");
				$id_kategori_kelas_ekonomi = $this->input->post("id_kategori_kelas_ekonomi");
				$id_kategori_bantuan = $this->input->post("id_kategori_bantuan");
				$keterangan = $this->input->post("keterangan");
				$id_user_level = 4;
		
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
				// echo $id_kategori_bantuan;
				// echo "<br>";
				// die();
				$hasil = $this->m_user->insert_data_penduduk($username, $password, $nama, $email, $no_hp, $id_user_level, $nik, $tempat_lahir, $tgl_lahir, $alamat, $jenis_kelamin, $pekerjaan, $id_rt, $id_kategori_bantuan, $id_kategori_kelas_ekonomi, $keterangan);
			
					if($hasil==false){
						$this->session->set_flashdata('eror_input','eror_input');
					
					}else{
						$this->session->set_flashdata('input','input');
					}
					redirect('Data_penduduk/view_admin_rt');
			}else{
		
				$this->session->set_flashdata('loggin_err','loggin_err');
				redirect('Login/index');
		
			}
	
		}

		public function edit_data_admin_rt(){
			if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 3) {
				$nama = $this->input->post("nama");
				$username = $this->input->post("username");
				$password = $this->input->post("password");
				$no_hp = $this->input->post("no_hp");
				$email = $this->input->post("email");
				$nik = $this->input->post("nik");
				$tempat_lahir = $this->input->post("tempat_lahir");
				$tgl_lahir = $this->input->post("tanggal_lahir");
				$alamat = $this->input->post("alamat");
				$jenis_kelamin = $this->input->post("jenis_kelamin");
				$pekerjaan = $this->input->post("pekerjaan");
				$id_rt = $this->input->post("id_rt");
				$id_kategori_kelas_ekonomi = $this->input->post("id_kategori_kelas_ekonomi");
				$id_kategori_bantuan = $this->input->post("id_kategori_bantuan");
				$keterangan = $this->input->post("keterangan");
				$nama = $this->input->post("nama");
				$id = $this->input->post("id");
				$id_user_detail = $this->input->post("id_user_detail");
				$id_user_level = 4;
		
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
				// echo $tgl_lahir;
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
				// echo $id_kategori_bantuan;
				// echo "<br>";
				// echo $id;
				// echo "<br>";
				// echo $id_user_detail;
				// echo "<br>";
				// echo $keterangan;
				// echo "<br>";
				// die();

				$hasil = $this->m_user->update_data_penduduk($username, $password, $nama, $email, $no_hp, $id_user_level, $nik, $tempat_lahir, $tgl_lahir, $alamat, $jenis_kelamin, $pekerjaan, $id_rt, $id_kategori_bantuan, $id_kategori_kelas_ekonomi, $keterangan, $id, $id_user_detail);
			
					if($hasil==false){
						$this->session->set_flashdata('eror_edit','eror_edit');
					
					}else{
						$this->session->set_flashdata('edit','edit');
					}
					redirect('Data_penduduk/view_admin_rt');
			}else{
		
				$this->session->set_flashdata('loggin_err','loggin_err');
				redirect('Login/index');
		
			}
	
		}
	
    public function view_masyarakat($id)
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 4) {
			$data['data_penduduk'] = $this->m_user->get_user_penduduk_by_id($id)->result_array();
			$data['rt_data'] = $this->m_rt->get_rt()->result_array();
			$data['kategori_kelas_ekonomi_data'] = $this->m_kategori_kelas_ekonomi->get_kategori_kelas_ekonomi()->result_array();
			$data['kategori_bantuan_data'] = $this->m_kategori_bantuan->get_kategori_bantuan()->result_array();
			$this->load->view('masyarakat/data_penduduk', $data);

		}else{

			$this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');

		}
	}

	public function edit_data_masyarakat(){
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 4) {
			$nama = $this->input->post("nama");
			$username = $this->input->post("username");
			$password = $this->input->post("password");
			$no_hp = $this->input->post("no_hp");
			$email = $this->input->post("email");
			$nik = $this->input->post("nik");
			$tempat_lahir = $this->input->post("tempat_lahir");
			$tgl_lahir = $this->input->post("tanggal_lahir");
			$alamat = $this->input->post("alamat");
			$jenis_kelamin = $this->input->post("jenis_kelamin");
			$pekerjaan = $this->input->post("pekerjaan");
			$id_rt = $this->input->post("id_rt");
			$id_kategori_kelas_ekonomi = $this->input->post("id_kategori_kelas_ekonomi");
			$id_kategori_bantuan = $this->input->post("id_kategori_bantuan");
			$keterangan = $this->input->post("keterangan");
			$nama = $this->input->post("nama");
			$id = $this->input->post("id");
			$id_user_detail = $this->input->post("id_user_detail");
			$id_user_level = 4;
	
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
			// echo $tgl_lahir;
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
			// echo $id_kategori_bantuan;
			// echo "<br>";
			// echo $id;
			// echo "<br>";
			// die();

			$hasil = $this->m_user->update_data_penduduk($username, $password, $nama, $email, $no_hp, $id_user_level, $nik, $tempat_lahir, $tgl_lahir, $alamat, $jenis_kelamin, $pekerjaan, $id_rt, $id_kategori_bantuan, $id_kategori_kelas_ekonomi, $keterangan, $id, $id_user_detail);
		
				if($hasil==false){
					$this->session->set_flashdata('eror_edit','eror_edit');
				
				}else{
					$this->session->set_flashdata('edit','edit');
				}
				redirect('Data_penduduk/view_masyarakat/'.$id);
		}else{
	
			$this->session->set_flashdata('loggin_err','loggin_err');
			redirect('Login/index');
	
		}

	}

}