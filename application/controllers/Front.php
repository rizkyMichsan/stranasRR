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

		$data = array(
			//data header & footer
			'title'	=> $this->front->where('config', array('code' => 'system_title'))->row()->name,
			'icon'	=> $this->front->where('config', array('code' => 'icon'))->row()->name,
			'unit'	=> $this->front->where('config', array('code' => 'unit'))->row()->name,
			'copyright'	=> $this->front->where('config', array('code' => 'copyright'))->row()->name,
			'logo'	=> $this->front->where('config', array('code' => 'logo'))->row()->name,
			'logo_putih'	=> $this->front->where('config', array('code' => 'logo_putih'))->row()->name,
			'profil'	=> $this->front->where('article', array('title' => 'Profil'))->row()->isi_article,
			'main_menu' => $this->front->where('web_menu', array('menu_stats'	=> 'mm'), 'list_number')->result_array()
			//tulis data body dibawah
		);
		$this->template->load('front', 'front', 'dash', $data);
	}
}
