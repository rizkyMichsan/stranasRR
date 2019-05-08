<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Front extends CI_Controller
{

	function __construct()
	{
		parent::__construct();

		$this->load->helper('cookie');
		$this->load->model('Mmenu');
	}

	public function index()
	{
		$this->template->load('front', 'front', 'dash');
	}
}
