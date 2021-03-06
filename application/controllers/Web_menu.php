<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Web_menu extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Web_menu_model');
        $this->load->model('Mmenu');
        $this->load->library('form_validation');
        $this->load->helper('cookie');
		if (!$this->ion_auth->logged_in())
         {
			redirect('login/index');
		 }
    }

    public function index()
    {
        $web_menu = $this->Web_menu_model->get_all();

        $data = array(
            'web_menu_data' => $web_menu,
            'message' => $this->session->userdata('message')
        );

        $this->template->load('template','web_menu','web_menu_list',$data);
        $this->load->view('web_menu/web_menu_form', $data);
        $this->session->unset_userdata('message');
    }
    function get(){
    	
		            $id = $this->input->get('id');
                $data = $this->Web_menu_model->get_by_id($id);
        echo json_encode($data);
    }
    
    public function create() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('message', 'failed');
            redirect(site_url('web_menu'));
        } else {
            $data = array(
		'menu_name' => $this->input->post('menu_name',TRUE),
		'menu_name_english' => $this->input->post('menu_name_english',TRUE),
		'icon' => $this->input->post('icon',TRUE),
		'link' => $this->input->post('link',TRUE),
		'id_parent' => $this->input->post('id_parent',TRUE),
		'menu_stats' => $this->input->post('menu_stats',TRUE),
		'list_number' => $this->input->post('list_number',TRUE),
		'menu_status' => $this->input->post('menu_status',TRUE),
		'active' => $this->input->post('active',TRUE),
	    );

            $this->Web_menu_model->insert($data);
            $this->session->set_flashdata('message', 'create');
            redirect(site_url('web_menu'));
        }
    }
    
   
    public function update() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('message', 'failed');
            redirect(site_url('web_menu'));
        } else {
            $data = array(
		'menu_name' => $this->input->post('menu_name',TRUE),
		'menu_name_english' => $this->input->post('menu_name_english',TRUE),
		'icon' => $this->input->post('icon',TRUE),
		'link' => $this->input->post('link',TRUE),
		'id_parent' => $this->input->post('id_parent',TRUE),
		'menu_stats' => $this->input->post('menu_stats',TRUE),
		'list_number' => $this->input->post('list_number',TRUE),
		'menu_status' => $this->input->post('menu_status',TRUE),
		'active' => $this->input->post('active',TRUE),
	    );

            $this->Web_menu_model->update($this->input->post('id_menu', TRUE), $data);
            $this->session->set_flashdata('message', 'update');
            redirect(site_url('web_menu'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Web_menu_model->get_by_id($id);

        if ($row) {
            $this->Web_menu_model->delete($id);
            $this->session->set_flashdata('message', 'delete');
            redirect(site_url('web_menu'));
        } else {
            $this->session->set_flashdata('message', 'not');
            redirect(site_url('web_menu'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('menu_name', 'menu name', 'trim|required');
	$this->form_validation->set_rules('menu_name_english', 'menu name english', 'trim|required');
	$this->form_validation->set_rules('icon', 'icon', 'trim|required');
	$this->form_validation->set_rules('link', 'link', 'trim|required');
	$this->form_validation->set_rules('id_parent', 'id parent', 'trim|required');
	$this->form_validation->set_rules('menu_stats', 'menu stats', 'trim|required');
	$this->form_validation->set_rules('list_number', 'list number', 'trim|required');
	$this->form_validation->set_rules('menu_status', 'menu status', 'trim|required');
	$this->form_validation->set_rules('active', 'active', 'trim|required');

	$this->form_validation->set_rules('id_menu', 'id_menu', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Web_menu.php */
/* Location: ./application/controllers/Web_menu.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-05-10 07:34:12 */
/* http://harviacode.com */