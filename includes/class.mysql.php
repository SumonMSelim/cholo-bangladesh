<?php
class MySQL
{
	
	private $db,$db_query = false,$db_mysql_query = "",$db_error = array(),$last_id,$sql_query = array();
	
	function __construct($array)
	{
		if (!isset($array['password']))
		{
			$array['password'] = "";
		}
		$this->db = mysql_connect($array['host'],$array['user'],$array['password']);
		mysql_select_db($array['database'],$this->db);
	}
	
	public function select($data,$from)
	{
		if (is_array($data))
		{
			$rd = array();
			foreach ($data as $d)
			{
				if ($this->is_function($d))
				{
					$rd[] = $d;
				}
				else {$rd[] = "`{$d}`";}
			}
			$data = join(",",$rd);
		}
		elseif ($this->is_function($data))
		{
			$data = $data;
		}
		elseif ("*" == $data)
		{
			$data = "*";
		}
		else {$data = "`{$data}`";}
		if (is_array($from))
		{
			$from = "`".join("`,`",$from)."`";
		}
		else {$from = "`{$from}`";}
		$this->db_mysql_query = "SELECT ".str_replace(".","`.`",$data)." FROM ".$from;
		return $this;
	}
	
	public function insert($table,$values)
	{
		$key = array_keys($values);
		$val = array();
		foreach (array_values($values) as $a)
		{
			$val[] = $this->escape($a);
		}
		$this->db_mysql_query = "INSERT INTO `{$table}` (`".join("`,`",$key)."`) VALUES ('".join("','",$val)."')";
		return $this;
	}
	
	public function update($data,$values)
	{
		$update = array();
		foreach ($values as $key=>$val)
		{
			$update[] = "`{$key}` = '".$this->escape($val)."'";
		}
		$this->db_mysql_query = "UPDATE `{$data}` SET ".join(",",$update);
		return $this;
	}
	
	public function delete($data)
	{
		$this->db_mysql_query = "DELETE FROM `{$data}`";
		return $this;
	}
	

	
	public function where($data,$array = false)
	{
		if ($array)
		{
			$ar2 = array();
			foreach ($array as $a)
			{
				$ar2[] = $this->escape($a);
			}
			$data = vsprintf($data,$ar2);
		}
		$this->db_mysql_query .= " WHERE ".$data;
		return $this;
	}
	
	public function order_by($order)
	{
		if (is_array($order))
		{
			$order = "`".join("`,`",$order)."`";
		}
		else {$order = "`{$order}`";}
		$this->db_mysql_query .= " ORDER BY ".str_replace(".","`.`",$order)." DESC";
		return $this;
	}
	
	public function limit($start,$end = false)
	{
		$start = intval($start);
		if ($end)
		{
			$this->db_mysql_query .= " LIMIT {$start},".intval($end);
		}
		else {$this->db_mysql_query .= " LIMIT {$start}";}
		return $this;
	}
	
	public function query($query = false)
	{
		if (!$query)
		{
			$query = $this->db_mysql_query;
			unset($this->db_mysql_query);
		}
		$query = $this->prepare($query);
		$type = explode(" ",$query);
		if ("delete" == strtolower($type[0]))
		{
			$query = $this->prepDelete($query);
		}
		$this->last_id = uniqid();
		$this->sql_query[$this->last_id] = $query;
		$this->db_query = mysql_query($query);
		if (!$this->db_query)
		{
			$this->db_error[$this->last_id] = mysql_error($this->db);
		}
		return $this->db_query;
	}
	
	public function fetch($type = "assoc",$db = false)
	{
		if (in_array($type,array("row","array","assoc")) && $this->db_query)
		{
			if (!$db)
			{
				$db = $this->db_query;
			}
			if ("row" == $type)
			{
				return mysql_fetch_row($db);
			}
			elseif ("array" == $type)
			{
				return mysql_fetch_array($db);
			}
			else
			{
				return mysql_fetch_assoc($db);
			}
		}
		else {return false;}
	}
	
	public function count()
	{
		if ($this->db_query)
		{
			return mysql_num_rows($this->db_query);
		}
		else {return false;}
	}
	
	public function affectedRow()
	{
		return mysql_affected_rows($this->db);
	}
	
	public function insertID()
	{
		return mysql_insert_id($this->db);
	}
	
	public function escape($data)
	{
		return mysql_real_escape_string($data,$this->db);
	}
	
	public function close()
	{
		mysql_close($this->db);
	}
	
	public function error()
	{
		if (isset($this->db_error[$this->last_id]))
		{
			return $this->db_error[$this->last_id];
		}
		else {return false;}
	}
	
	public function error_list()
	{
		return $this->db_error;
	}
	
	private function prepare($sql)
	{
		$sql = preg_replace('/[\t ]+/',' ',$sql);
		$sql = trim($sql);
		return $sql;
	}
	
	private function prepDelete($sql)
	{
		if (preg_match('/^\s*DELETE\s+FROM\s+(\S+)\s*$/i', $sql))
		{
			$sql = preg_replace("/^\s*DELETE\s+FROM\s+(\S+)\s*$/", "DELETE FROM \\1 WHERE 1=1",$sql);
		}
		return $sql;
	}
	
	private function is_function($data)
	{
		if (count(explode('(',$data)) > 1)
		{
			return true;
		}
		else
		{
			return false;
		}
	}
	
	public function last_query()
	{
		return $this->sql_query[$this->last_id];
	}
	
	public function all_query()
	{
		return $this->sql_query;
	}
	
}
