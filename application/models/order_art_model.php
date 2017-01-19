<?php 

class Order_art_model extends CI_Model
{
	private $table;
	private $pk;

	public function __construct()
	{
		parent::__construct();
		$this->table 	= 'order_art';
		$this->pk 		= 'id_order';
	}

	public function get_all()
	{
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

	public function get_con($cond)
	{
		$this->db->where($this->pk,$cond);
		$query = $this->db->get($this->table);
		return $query->result();
	}

	public function insert($data)
	{
		return $this->db->insert($this->table, $data);
	}

	public function update_order($cond, $data)
	{
		$this->db->where('id_art',$cond);
		return $this->db->update($this->table, $data);	
	}

	public function update($key, $data)
	{
		$this->db->where($this->pk, $key);
		return $this->db->update($this->table, $data);
	}

	public function delete($key)
	{
		return $this->db->delete($this->table, array(
			$this->pk => $key
		));
	}
}