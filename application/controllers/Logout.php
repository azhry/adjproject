<?php 
class Logout extends MY_Controller
{
	public function index()
	{
		if($this->session->userdata('pengguna') == 'admin' || $this->session->userdata('pengguna') == 'kepala'){
			$this->session->sess_destroy();
			redirect('home/login_admin');
		}
		else{
		$this->session->sess_destroy();
		redirect('home/login');
		}
		exit;
	}
}