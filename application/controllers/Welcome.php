<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	function __construct()
	{
		parent::__construct();

		$this->load->helper('cookie');
		$this->load->model('Mmenu');
		if (!$this->ion_auth->logged_in()) {
			redirect('login/index');
		}
	}

	public function index()
	{
		$this->template->load('template', '', 'dashboard');
	}

	function tables()
	{
		$this->template->load('template', '', 'table');
	}
}
