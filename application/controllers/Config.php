<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Config extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Config_model');
        $this->load->library('form_validation');
        $this->load->helper('cookie');
		if (!$this->ion_auth->logged_in())
         {
			redirect('login/index');
		 }
    }

    public function index()
    {
        $config = $this->Config_model->get_all();

        $data = array(
            'config_data' => $config,
            'message' => $this->session->userdata('message')
        );

        $this->template->load('template','config','config_list',$data);
        $this->load->view('config/config_form', $data);
        $this->session->unset_userdata('message');
    }
    function get(){
    	
		            $id = $this->input->get('id');
                $data = $this->Config_model->get_by_id($id);
        echo json_encode($data);
    }
    
    public function create() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('message', 'failed');
            redirect(site_url('config'));
        } else {
            $data = array(
		'name' => $this->input->post('name',TRUE),
		'code' => $this->input->post('code',TRUE),
	    );

            $this->Config_model->insert($data);
            $this->session->set_flashdata('message', 'create');
            redirect(site_url('config'));
        }
    }
    
   
    public function update() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('message', 'failed');
            redirect(site_url('config'));
        } else {
            $data = array(
		'name' => $this->input->post('name',TRUE),
		'code' => $this->input->post('code',TRUE),
	    );

            $this->Config_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'update');
            redirect(site_url('config'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Config_model->get_by_id($id);

        if ($row) {
            $this->Config_model->delete($id);
            $this->session->set_flashdata('message', 'delete');
            redirect(site_url('config'));
        } else {
            $this->session->set_flashdata('message', 'not');
            redirect(site_url('config'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('name', 'name', 'trim|required');
	$this->form_validation->set_rules('code', 'code', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Config.php */
/* Location: ./application/controllers/Config.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-03-13 04:39:54 */
/* http://harviacode.com */