<?php  

class Konsumen_model extends CI_Model{
	protected $table;
	protected $key;

	function __construct(){
		parent::__construct();
		$this->table 			= 'konsumen';
		$this->key 				= 'id_konsumen';
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
	
	function get_data_byId_konsumen($id_konsumen){
		$this->db->where($this->key, $id_konsumen); 
		$query = $this->db->get($this->table);
		return $query->row();
	}

	function get_data_byConditional($condition){
		$this->db->where($condition);
		$query = $this->db->get($this->table);
		return $query;
	}

	function get_id($id_konsumen){
		$this->db->where($this->key, $id_konsumen); 
		$query = $this->db->get($this->table);
		foreach ($query->result() as $row) {
			$id_konsumen = $row->id_konsumen;
		}
		return $id_konsumen;
	}

	function get_last_data(){
		$data = $this->db->query('SELECT * FROM konsumen ORDER BY id_konsumen ASC LIMIT 1');
		foreach($data->result() as $row){
			$id_konsumen = $row->id_konsumen;
		}
		return $id_konsumen;
	}

	function insert($data){
		return $this->db->insert($this->table, $data); 
	}

	function update($id_konsumen, $data){
		$this->db->where($this->key, $id_konsumen); 
		return $this->db->update($this->table, $data);
	}

	function delete($id_konsumen){
		return $this->db->delete($this->table, array($this->key => $id_konsumen)); 
	}

	function getDataLike($like)
	{
		$this->db->select('*');
		$this->db->like($like);
		$query = $this->db->get($this->table);
		return $query->result();
	}

}

 ?>