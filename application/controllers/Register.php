<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	public function index()
	{
		$this->load->view('register');
	}

	public function proses()
	{
		$username = $this->input->post("username");
		$email = $this->input->post("email");
		$no_hp = $this->input->post("no_hp");
		$password = $this->input->post("password");
		$re_password = $this->input->post("re_password");

		echo $username;
		echo "<br>";
		echo $email;
		echo "<br>";
		echo $no_hp;
		echo "<br>";
		echo $password;
		echo "<br>";
		echo $re_password;
		die();

	}
}
