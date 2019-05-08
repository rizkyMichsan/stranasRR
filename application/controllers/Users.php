<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Users extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Users_model');
        $this->load->library('form_validation');
		$this->load->helper('cookie');
		
		if (!$this->ion_auth->logged_in())
         {
			redirect('login/index');
		 }
    }

    public function index()
    {
        $users = $this->Users_model->get_all();
		
        $data = array(
            'users_data' => $users,
            'message' => $this->session->userdata('message')
        );

        $this->template->load('template','users','ic_users_list',$data);
        $this->load->view('users/ic_users_form', $data);
        $this->session->unset_userdata('message');
    }
    function get(){
    	
		            $id = $this->input->get('id');
				$json1 = json_encode($this->Users_model->get_by_id($id),true);
				$json2=json_encode($this->ion_auth->get_users_groups($id)->row(),true);
				
				
        echo json_encode(array_merge(json_decode($json1, true),json_decode($json2, true)));
    }
    function upload(){
        if (isset($_FILES['gambar']) && $_FILES['gambar']['name'] != ''){
            $user = $this->ion_auth->user($this->input->post('idd'))->row();
            //var_dump($user->username);
            $url='assets/berkas/pegawai/'.$user->username;
            unlink("./".$url.'/ttd.png');
            $config['upload_path'] = $url;
            $config['allowed_types'] = 'png||PNG';
            $config['max_size'] = '10240'; //100 MB
            $config['file_name'] = 'ttd.png';

            $this->load->library('upload', $config);
             $this->upload->initialize($config);
             $upl=$this->upload->do_upload('gambar');
             redirect(site_url('users'));
        } 
    }
    public function profile()
    {
        $users = $this->ion_auth->user($this->session->userdata('user_id'))->row();
		
        $data = array(
            'users_data' => $users,
            'message' => $this->session->userdata('message')
        );

        $this->template->load('template','users','profile',$data);
        $this->session->unset_userdata('message');
    }
    function get_user(){
    	
        $data = array(
            'username' => $this->input->get('id')
        );
        $json1 = $this->Users_model->numwhere($data);
    
    
        echo $json1;
}
    public function delete($id) 
    {
        $row = $this->Users_model->get_by_id($id);
		//var_dump($id);
        if ($row) {
            $this->ion_auth->deluser($id);
            $this->session->set_flashdata('message', 'delete');
            redirect(site_url('users'));
        } else {
            $this->session->set_flashdata('message', 'not');
            redirect(site_url('users'));
        }
    }
    public function restuser($id) 
    {
        $row = $this->Users_model->get_by_id($id);
		//var_dump($id);
        if ($row) {
            $this->ion_auth->restuser($id);
            $this->session->set_flashdata('message', 'update');
            redirect(site_url('users'));
        } else {
            $this->session->set_flashdata('message', 'not');
            redirect(site_url('users'));
        }
    }

    

}

/* End of file Users.php */
/* Location: ./application/controllers/Users.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-02-07 09:25:03 */
/* http://harviacode.com */