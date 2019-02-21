<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('page/login');
	}
	
	public function ceklogin()
	{
		if(isset($_POST['login'])){
			$user = $this->input->post('user',true);
			$pass = $this->input->post('pass',true);
			$_SESSION["user"] = $user;
			$cek = $this->login_model->proses_login($user,$pass);
			if($cek->level === "kasir"){
				redirect('usr/kasir');
			}elseif ($cek->level === "pelayan") {
				redirect('usr/pelayan');
			}else{
				redirect('login/index');
			}
		}
	}

	public function json()
	{
		echo $this->json_model->jmlmeja();
	}

}
