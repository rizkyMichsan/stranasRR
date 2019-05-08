<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modul extends CI_Controller {

	function __construct(){
		parent::__construct();
		
		$this->load->helper('cookie');
		if (!$this->ion_auth->logged_in())
         {
			redirect('login/index');
		 }
		 
			
		 
	}
		
	public function index()
	{
		$this->template->load('template','modul','index');
	}
        
        
}
