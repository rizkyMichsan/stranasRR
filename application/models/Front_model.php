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
	function where($table, $data)
	{
		$this->db->order_by('order', 'ASC');
		$query = $this->db->get_where($table, $data);
		return $query;
	}
	function add($table, $data)
	{
		$hasil = $this->db->insert($table, $data);
		return $hasil;
	}
}
