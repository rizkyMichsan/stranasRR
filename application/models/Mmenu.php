<?php
class Mmenu extends CI_Model
	{
		function __construct() 
		{
	        parent::__construct();
	        $this->db  = $this->load->database('default',TRUE);
    	}
		function all($table)
		{
			$query = $this->db->get($table);
			return $query->result_array();
		}
		function limit($table, $limit)
		{
			$query = $this->db->get($table, $limit);
			return $query->result_array();
		}
		function where($table, $data)
		{
			$this->db->order_by('order', 'ASC');
			$query = $this->db->get_where($table, $data);
			return $query->result_array();
		}
		function add($table,$data){
			$hasil=$this->db->insert($table,$data);
			return $hasil;
		}
		function where_row($table, $data){
			$query = $this->db->get_where($table, $data);
			return $query->row();
		}
	}
?>

