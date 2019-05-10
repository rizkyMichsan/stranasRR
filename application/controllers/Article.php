<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Article extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Article_model');
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
        $article = $this->Article_model->get_all();

        $data = array(
            'article_data' => $article,
            'message' => $this->session->userdata('message')
        );

        $this->template->load('template','article','article_list',$data);
        $this->load->view('article/article_form', $data);
        $this->session->unset_userdata('message');
    }
    function get(){
    	
		            $id = $this->input->get('id');
                $data = $this->Article_model->get_by_id($id);
        echo json_encode($data);
    }
    
    public function create() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('message', 'failed');
            redirect(site_url('article'));
        } else {
            $data = array(
		'username' => $this->input->post('username',TRUE),
		'title' => $this->input->post('title',TRUE),
		'title_eng' => $this->input->post('title_eng',TRUE),
		'url_article' => $this->input->post('url_article',TRUE),
		'isi_article' => $this->input->post('isi_article',TRUE),
		'isi_article_eng' => $this->input->post('isi_article_eng',TRUE),
		'hari' => $this->input->post('hari',TRUE),
		'tanggal' => $this->input->post('tanggal',TRUE),
		'jam' => $this->input->post('jam',TRUE),
		'gambar' => $this->input->post('gambar',TRUE),
		'video' => $this->input->post('video',TRUE),
		'poster_video' => $this->input->post('poster_video',TRUE),
		'embbed_video' => $this->input->post('embbed_video',TRUE),
		'gen_code_article' => $this->input->post('gen_code_article',TRUE),
		'status' => $this->input->post('status',TRUE),
		'dibaca' => $this->input->post('dibaca',TRUE),
		'id_menu' => $this->input->post('id_menu',TRUE),
		'id_main_menu' => $this->input->post('id_main_menu',TRUE),
		'document' => $this->input->post('document',TRUE),
		'komentar_status' => $this->input->post('komentar_status',TRUE),
		'tag' => $this->input->post('tag',TRUE),
	    );

            $this->Article_model->insert($data);
            $this->session->set_flashdata('message', 'create');
            redirect(site_url('article'));
        }
    }
    
   
    public function update() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('message', 'failed');
            redirect(site_url('article'));
        } else {
            $data = array(
		'username' => $this->input->post('username',TRUE),
		'title' => $this->input->post('title',TRUE),
		'title_eng' => $this->input->post('title_eng',TRUE),
		'url_article' => $this->input->post('url_article',TRUE),
		'isi_article' => $this->input->post('isi_article',TRUE),
		'isi_article_eng' => $this->input->post('isi_article_eng',TRUE),
		'hari' => $this->input->post('hari',TRUE),
		'tanggal' => $this->input->post('tanggal',TRUE),
		'jam' => $this->input->post('jam',TRUE),
		'gambar' => $this->input->post('gambar',TRUE),
		'video' => $this->input->post('video',TRUE),
		'poster_video' => $this->input->post('poster_video',TRUE),
		'embbed_video' => $this->input->post('embbed_video',TRUE),
		'gen_code_article' => $this->input->post('gen_code_article',TRUE),
		'status' => $this->input->post('status',TRUE),
		'dibaca' => $this->input->post('dibaca',TRUE),
		'id_menu' => $this->input->post('id_menu',TRUE),
		'id_main_menu' => $this->input->post('id_main_menu',TRUE),
		'document' => $this->input->post('document',TRUE),
		'komentar_status' => $this->input->post('komentar_status',TRUE),
		'tag' => $this->input->post('tag',TRUE),
	    );

            $this->Article_model->update($this->input->post('id_article', TRUE), $data);
            $this->session->set_flashdata('message', 'update');
            redirect(site_url('article'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Article_model->get_by_id($id);

        if ($row) {
            $this->Article_model->delete($id);
            $this->session->set_flashdata('message', 'delete');
            redirect(site_url('article'));
        } else {
            $this->session->set_flashdata('message', 'not');
            redirect(site_url('article'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('username', 'username', 'trim|required');
	$this->form_validation->set_rules('title', 'title', 'trim|required');
	$this->form_validation->set_rules('title_eng', 'title eng', 'trim|required');
	$this->form_validation->set_rules('url_article', 'url article', 'trim|required');
	$this->form_validation->set_rules('isi_article', 'isi article', 'trim|required');
	$this->form_validation->set_rules('isi_article_eng', 'isi article eng', 'trim|required');
	$this->form_validation->set_rules('hari', 'hari', 'trim|required');
	$this->form_validation->set_rules('tanggal', 'tanggal', 'trim|required');
	$this->form_validation->set_rules('jam', 'jam', 'trim|required');
	$this->form_validation->set_rules('gambar', 'gambar', 'trim|required');
	$this->form_validation->set_rules('video', 'video', 'trim|required');
	$this->form_validation->set_rules('poster_video', 'poster video', 'trim|required');
	$this->form_validation->set_rules('embbed_video', 'embbed video', 'trim|required');
	$this->form_validation->set_rules('gen_code_article', 'gen code article', 'trim|required');
	$this->form_validation->set_rules('status', 'status', 'trim|required');
	$this->form_validation->set_rules('dibaca', 'dibaca', 'trim|required');
	$this->form_validation->set_rules('id_menu', 'id menu', 'trim|required');
	$this->form_validation->set_rules('id_main_menu', 'id main menu', 'trim|required');
	$this->form_validation->set_rules('document', 'document', 'trim|required');
	$this->form_validation->set_rules('komentar_status', 'komentar status', 'trim|required');
	$this->form_validation->set_rules('tag', 'tag', 'trim|required');

	$this->form_validation->set_rules('id_article', 'id_article', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Article.php */
/* Location: ./application/controllers/Article.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-05-10 07:03:51 */
/* http://harviacode.com */