<?php  

class Laporan_model extends CI_Model{
	private $table;
	private $key;

	function __construct(){
		parent::__construct();
		$this->table 			= 'laporan';
		$this->key 				= 'id_laporan';
	}

	function get_all(){
		$query = $this->db->get($this->table); 
		return $query->result();
	}
	function getDataLike($like)
	{
		$this->db->select('*');
		$this->db->like($like);
		$query = $this->db->get($this->table);
		return $query->result();
	}

	function grafik(){
		$this->db->select('COUNT(*) as jumlah , MONTHNAME(waktu_laporan) as bulan');
		$this->db->group_by('MONTH(waktu_laporan)');
		$query = $this->db->get($this->table);
		return $query->result();
	}
	function get_data_byId_laporan($id_laporan){
		$this->db->where($this->key, $id_laporan); 
		$query = $this->db->get($this->table);
		return $query->row();
	}

	function get_data_byConditional($condition){
		$this->db->where($condition);
		$query = $this->db->get($this->table);
		return $query;
	}

	function get_id($id_laporan){
		$this->db->where($this->key, $id_laporan); 
		$query = $this->db->get($this->table);
		foreach ($query->result() as $row) {
			$id_laporan = $row->id_laporan;
		}
		return $id_laporan;
	}

	function get_last_data(){
		$data = $this->db->query('SELECT * FROM laporan ORDER BY id_laporan ASC LIMIT 1');
		foreach($data->result() as $row){
			$id_laporan = $row->id_laporan;
		}
		return $id_laporan;
	}

	public function update_laporan($cond, $data)
	{
		$this->db->where('id_art',$cond);
		return $this->db->update($this->table, $data);	
	}

	function insert($data){
		return $this->db->insert($this->table, $data); 
	}

	function update($id_laporan, $data){
		$this->db->where($this->key, $id_laporan); 
		return $this->db->update($this->table, $data);
	}

	function delete($id_laporan){
		return $this->db->delete($this->table, array($this->key => $id_laporan)); 
	}

}

 ?>