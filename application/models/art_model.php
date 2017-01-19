<?php  

class Art_model extends CI_Model{
	private $table;
	private $key;
	public $rows;
	var $foto;
	var $galerry_path_url;

	function __construct(){
		parent::__construct();
		$this->table 			= 'art';
		$this->key 				= 'id_art';
		$this->foto 			= realpath(APPPATH.'../foto');
		$this->galerry_path_url = base_url().'foto/';
	}

	function getDataLike($like)
	{
		$this->db->select('*');
		$this->db->like($like);
		$query = $this->db->get($this->table);
		return $query->result();
	}

	public function get_limit()
	{
		$this->db->select('*');
		$this->db->where('pengalaman >=', '3');
		$this->db->order_by('pengalaman', 'DESC');
		$this->db->limit(4);
		$query = $this->db->get($this->table);
		// print_r($query->result());
		// exit;
		return $query->result();
	}

	function limit(){
		
		$data = $this->db->query('SELECT * FROM art ORDER BY id_art ASC LIMIT 8');
		return $data->result();
	}

	function get_all(){
		$query = $this->db->get($this->table); 
		return $query->result();
	}


	public function get($cond = array())
	{
		if (count($cond) > 0)
			$this->db->where($cond);

		$query = $this->db->get($this->table);
		return $query->result();
	}

	function get_data_byId_art($id_art){
		$this->db->where($this->key, $id_art); 
		$query = $this->db->get($this->table);
		return $query->row();
	}

	function get_data_byConditional($condition){
		$this->db->where($condition);
		$query = $this->db->get($this->table);
		return $query;
	}

	function get_id($id_art){
		$this->db->where($this->key, $id_art); 
		$query = $this->db->get($this->table);
		foreach ($query->result() as $row) {
			$id_art = $row->id_art;			
		}
		return $id_art;
	}

	function get_last_data(){
		$data = $this->db->query('SELECT * FROM art ORDER BY id_art ASC LIMIT 1');
		foreach($data->result() as $row){
			$id_art = $row->id_art;
		}
		return $id_art;
	}

	function insert($data){
		return $this->db->insert($this->table, $data); 
	}

	function update($id_art, $data){
		$this->db->where($this->key, $id_art); 
		return $this->db->update($this->table, $data);
	}

	function delete($id_art){
		return $this->db->delete($this->table, array($this->key => $id_art)); 
	}

	function do_upload($id_art){

		$config = array (
			'file_name' 	=> $id_art.'.png',
			'allowed_types' => 'jpg|jpeg|gif|png',
			'upload_path' 	=> $this->foto,
			'max_size' 		=> 2000
		);

		$this->load->library('upload', $config);
		$this->upload->do_upload();	
	}

}

 ?>