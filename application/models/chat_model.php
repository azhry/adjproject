<?php 

class Chat_model extends CI_Model
{
	private $table;
	private $pk;

	public function __construct()
	{
		parent::__construct();
		$this->table 	= 'chat';
		$this->pk 		= 'id_chat';
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

	public function insert($data)
	{
		return $this->db->insert($this->table, $data);
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

	public function get_user_chat_list()
	{
		$query = $this->db->query('SELECT id_pengguna FROM chat GROUP BY id_pengguna ORDER BY id_pengguna DESC');
		return $query->result();
	}
}