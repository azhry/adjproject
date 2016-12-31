<?php  

class Info_model extends CI_Model{
	private $table;
	private $key;
	var $gambar;
	var $galerry_path_url;

	function __construct(){
		parent::__construct();
		$this->table 			= 'info';
		$this->key 				= 'id_info';
		$this->gambar 			= realpath(APPPATH.'../gambar');
		$this->galerry_path_url = base_url().'gambar/';
	}

	function getDataLike($like)
	{
		$this->db->select('*');
		$this->db->like($like);
		$query = $this->db->get($this->table);
		return $query->result();
	}
	
	function get_all(){
		$query = $this->db->get($this->table); 
		return $query->result();
	}

	public function get_all_descending()
	{
		$query = $this->db->query("SELECT * FROM " . $this->table . " ORDER BY id_info DESC");
		return $query->result();
	}

	public function get_limit()
	{
		$query = $this->db->query("SELECT * FROM " . $this->table . " ORDER BY id_info DESC limit 5");
		return $query->result();
	}

	public function get_info_list($limit, $start)
    {
        $sql = 'select * from info ORDER BY id_info DESC limit ' . $start . ', ' . $limit;
        $query = $this->db->query($sql);
        return $query->result();
    }

	function get_data_byId_info($id_info){
		$this->db->where($this->key, $id_info); 
		$query = $this->db->get($this->table);
		return $query->row();
	}

	function get_data_byConditional($condition){
		$this->db->where($condition);
		$query = $this->db->get($this->table);
		return $query;
	}

	function get_id($id_info){
		$this->db->where('id_info', $id_info); 
		$query = $this->db->get($this->table);
		foreach ($query->result() as $row) {
			$id_info = $row->id_info;			
		}
		return $id_info;
	}

	function get_last_data(){
		$data = $this->db->query('SELECT * FROM info ORDER BY id_info ASC LIMIT 1');
		foreach($data->result() as $row){
			$id_info = $row->id_info;
		}
		return $id_info;
	}

	function insert($data){
		return $this->db->insert($this->table, $data); 
	}

	function update($id_info, $data){
		$this->db->where($this->key, $id_info); 
		return $this->db->update($this->table, $data);
	}

	function delete($id_info){
		return $this->db->delete($this->table, array($this->key => $id_info)); 
	}

}

 ?>