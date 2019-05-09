<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Front extends CI_Controller
{

	function __construct()
	{
		parent::__construct();

		$this->load->helper('cookie');
		$this->load->model('Front_model', 'front');
	}

	public function index()
	{
		$data = array();
		$this->template->load('front', 'front', 'dash', $data);
	}
}
