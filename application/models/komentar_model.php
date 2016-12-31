<?php  

class Komentar_model extends CI_Model{
	private $table;
	private $key;

	function __construct(){
		parent::__construct();
		$this->table 			= 'komentar';
		$this->key 				= 'id_komentar';
	}

	function get_all(){
		$query = $this->db->get($this->table); 
		return $query->result();
	}
	
	function get_data_byId_komentar($id_komentar){
		$this->db->where($this->key, $id_komentar); 
		$query = $this->db->get($this->table);
		return $query->row();
	}

	function get_data_byConditional($condition){
		$this->db->where($condition);
		$query = $this->db->get($this->table);
		return $query->result();
	}

	public function get_data_byCondition_descend($condition)
	{
		$this->db->where($condition);
		$this->db->order_by('id_komentar', 'DESC');
		$query = $this->db->get($this->table);
		return $query->result();	
	}


	function get_id($id_komentar){
		$this->db->where($this->key, $id_komentar); 
		$query = $this->db->get($this->table);
		foreach ($query->result() as $row) {
			$id_komentar = $row->id_komentar;
		}
		return $id_komentar;
	}

	function get_last_data(){
		$data = $this->db->query('SELECT * FROM komentar ORDER BY id_komentar ASC LIMIT 1');
		foreach($data->result() as $row){
			$id_komentar = $row->id_komentar;
		}
		return $id_komentar;
	}

	function insert($data){
		return $this->db->insert($this->table, $data); 
	}

	function update($id_komentar, $data){
		$this->db->where($this->key, $id_komentar); 
		return $this->db->update($this->table, $data);
	}

	function delete($id_komentar){
		return $this->db->delete($this->table, array($this->key => $id_komentar)); 
	}

}

 ?>