<?php  

class Login_model extends CI_Model{
	public $rows = 0;

	function __construct(){
		parent::__construct();
	}

	function cek_login_art($data){
		$this->load->model('art_model');
		$data_art = $this->art_model->get_data_byConditional($data);
		if($data_art->num_rows() == 1){
			 $this->rows = $data_art->num_rows();
		}
		return $data_art->row();
	}

	function cek_login_kepala_yayasan($data){
		$this->load->model('kepala_yayasan_model');
		$data_kepala_yayasan = $this->kepala_yayasan_model->get_data_byConditional($data);
		if($data_kepala_yayasan->num_rows() == 1){
			 $this->rows = $data_kepala_yayasan->num_rows();
		}
		return $data_kepala_yayasan->row();
	}

	function cek_login_konsumen($data){
		$this->load->model('konsumen_model');
		$data_konsumen = $this->konsumen_model->get_data_byConditional($data);
		if($data_konsumen->num_rows() == 1){
			 $this->rows = $data_konsumen->num_rows();
		}
		return $data_konsumen->row();
	}

	function cek_login_admin($data){
		$this->load->model('admin_model');
		$data_admin = $this->admin_model->get_data_byConditional($data);
		if($data_admin->num_rows() == 1){
			 $this->rows = $data_admin->num_rows();
		}
		return $data_admin->row();
	}
}

?>