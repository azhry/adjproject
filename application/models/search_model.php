<?php  
class Search_model extends CI_Model
{
	protected $table_name;
	protected $sql;
	protected $sql_array;

	public function __construct()
	{
		parent::__construct();
		$this->table_name = 'art';

	}

	private function sql_check()
	{
		if (isset($this->sql))
		{
			$this->sql_array = explode(' ', $this->sql);
			if ($this->sql_array[count($this->sql_array) - 1] == $this->table_name)
			{
				$this->sql .= ' WHERE ';
			}		
			else
			{
				$this->sql .= ' OR ';
			}
		}
	}

	public function cari($usia_max,$usia_min,$suku,$asal,$gaji_max,$gaji_min,$agama,$pendidikan)
	{
		$this->db->select('*');
		if ($usia_max != 'any' || $usia_min != 'any') {
			$usia = "usia BETWEEN " .$usia_max. " AND " .$usia_min;
			$this->db->where($usia);
		}
		if ($suku != 'any') {
			$this->db->or_where('suku',$suku);
		}
		if ($asal != 'any') {
			$this->db->or_where('asal',$asal);
		}
		if ($agama != 'any') {
			$this->db->or_where('agama',$agama);
		}
		if ($pendidikan != 'any') {
			$this->db->or_where('pendidikan',$pendidikan);
		}
		if ($gaji_max != 'any' || $gaji_min != 'any') {
			$gaji = "usia BETWEEN " .$gaji_max. " AND " .$gaji_min;
			$this->db->or_where($gaji);
		}
		$query = $this->db->get($this->table_name);
		
		return $query->result();
	}

	public function select()
	{
		$this->sql = 'SELECT * FROM ' . $this->table_name;
		return $this;
	}

	public function usia($max, $min)
	{
		if ($max != 'any' || $min != 'any')
		{
			if ($max != 'any' && $min != 'any')
			{
				$this->sql_check();
				$this->sql .= 'usia BETWEEN ' . $min . ' AND ' . $max;
			}
			else if ($max != 'any' && $min == 'any')
			{
				$this->sql_check();
				$this->sql .= 'usia <= ' . $max;
			}
			else if ($max == 'any' && $min != 'any')
			{
				$this->sql_check();
				$this->sql .= 'usia >= ' . $min;
			}
		}	
		return $this;
	}

	public function pendidikan($pendidikan)
	{
		if ($pendidikan != 'any')
		{
			$this->sql_check();
			$this->sql .= 'pendidikan="' . $pendidikan . '"';
		}
		return $this;
	}

	public function agama($agama)
	{
		if ($agama != 'any')
		{
			$this->sql_check();
			$this->sql .= 'agama="' . $agama . '"';
		}
		return $this;
	}

	public function gaji($max, $min)
	{
		if ($max != 'any' || $min != 'any')
		{
			if ($max != 'any' && $min != 'any')
			{
				$this->sql_check();
				$this->sql .= 'gaji BETWEEN ' . $min . ' AND ' . $max;
			}
			else if ($max != 'any' && $min == 'any')
			{
				$this->sql_check();
				$this->sql .= 'gaji <= ' . $max;
			}
			else if ($max == 'any' && $min != 'any')
			{
				$this->sql_check();
				$this->sql .= 'gaji >= ' . $min;
			}

		}		
		return $this;	
	}

	public function asal_kota($kota)
	{
		if ($kota != 'any')
		{
			$this->sql_check();
			$this->sql .= 'asal="' . $kota . '"';
		}
		return $this;
	}

	public function suku($suku)
	{
		if ($suku != 'any')
		{
			$this->sql_check();
			$this->sql .= 'suku="' . $suku . '"';
		}
			
		return $this;
	}

	public function execute()
	{
		$query = $this->db->query($this->sql);
		return $query->result();
	}

}