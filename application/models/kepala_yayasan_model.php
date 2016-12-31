<?php  

class Kepala_yayasan_model extends CI_Model{
	private $table;
	private $key;

	function __construct(){
		parent::__construct();
		$this->table 			= 'kepala_yayasan';
		$this->key 				= 'id_user';
	}

	function get_all(){
		$query = $this->db->get($this->table); 
		return $query->result();
	}
	
	function get_data_byId_user($id_user){
		$this->db->where($this->key, $id_user); 
		$query = $this->db->get($this->table);
		return $query->row();
	}

	function get_data_byConditional($condition){
		$this->db->where($condition);
		$query = $this->db->get($this->table);
		return $query;
	}

	function get_id($id_user){
		$this->db->where($this->key, $id_user); 
		$query = $this->db->get($this->table);
		foreach ($query->result() as $row) {
			$id_user = $row->id_user;
		}
		return $id_user;
	}

	function get_last_data(){
		$data = $this->db->query('SELECT * FROM kepala_yayasan ORDER BY id_user ASC LIMIT 1');
		foreach($data->result() as $row){
			$id_user = $row->id_user;
		}
		return $id_user;
	}

	function insert($data){
		return $this->db->insert($this->table, $data); 
	}

	function update($id_user, $data){
		$this->db->where($this->key, $id_user); 
		return $this->db->update($this->table, $data);
	}

	function delete($id_user){
		return $this->db->delete($this->table, array($this->key => $id_user)); 
	}

}

 ?>