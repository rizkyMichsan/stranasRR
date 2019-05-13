<?php
class Front_model extends CI_Model
{
	function __construct()
	{
		parent::__construct();
		$this->db  = $this->load->database('default', TRUE);
	}
	function all($table)
	{
		$query = $this->db->get($table);
		return $query;
	}
	function limit($table, $limit)
	{
		$query = $this->db->get($table, $limit);
		return $query;
	}
	function where($table, $data, $order = null)
	{
		if ($order != null) {
			$this->db->order_by($order, 'ASC');
		}

		$query = $this->db->get_where($table, $data);
		return $query;
	}
	function add($table, $data)
	{
		$this->db->insert($table, $data);
		return $this->db->affected_rows();
	}
	function update($table, $id, $data, $primary)
	{
		$this->db->where($primary, $id);
		$this->db->update($table, $data);
		return $this->db->affected_rows();
	}
	function delete($table, $id, $primary)
	{
		$this->db->delete($table, [$primary => $id]);
		return $this->db->affected_rows();
	}
}
