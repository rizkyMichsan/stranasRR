<?php

$string = "<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class " . $c . " extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        \$this->load->model('$m');
        \$this->load->model('Mmenu');
        \$this->load->library('form_validation');
        \$this->load->helper('cookie');
		if (!\$this->ion_auth->logged_in())
         {
			redirect('login/index');
		 }
    }";

$string .="\n\n    public function index()
    {
        \$$c_url = \$this->" . $m . "->get_all();

        \$data = array(
            '" . $c_url . "_data' => \$$c_url,
            'message' => \$this->session->userdata('message')
        );

        \$this->template->load('template','$c_url','$v_list',\$data);
        \$this->load->view('$c_url/$v_form', \$data);
        \$this->session->unset_userdata('message');
    }";
 
    $string .= "
    function get(){
    	
		            \$id = \$this->input->get('id');
                \$data = \$this->" . $m . "->get_by_id(\$id);
        echo json_encode(\$data);
    }";
$string .= "
    
    public function create() 
    {
        \$this->_rules();

        if (\$this->form_validation->run() == FALSE) {
            \$this->session->set_flashdata('message', 'failed');
            redirect(site_url('".$c_url."'));
        } else {
            \$data = array(";
foreach ($non_pk as $row) {
    $string .= "\n\t\t'" . $row['column_name'] . "' => \$this->input->post('" . $row['column_name'] . "',TRUE),";
}
$string .= "\n\t    );

            \$this->".$m."->insert(\$data);
            \$this->session->set_flashdata('message', 'create');
            redirect(site_url('$c_url'));
        }
    }
    
   
    public function update() 
    {
        \$this->_rules();

        if (\$this->form_validation->run() == FALSE) {
            \$this->session->set_flashdata('message', 'failed');
            redirect(site_url('".$c_url."'));
        } else {
            \$data = array(";
foreach ($non_pk as $row) {
    $string .= "\n\t\t'" . $row['column_name'] . "' => \$this->input->post('" . $row['column_name'] . "',TRUE),";
}    
$string .= "\n\t    );

            \$this->".$m."->update(\$this->input->post('$pk', TRUE), \$data);
            \$this->session->set_flashdata('message', 'update');
            redirect(site_url('$c_url'));
        }
    }
    
    public function delete(\$id) 
    {
        \$row = \$this->".$m."->get_by_id(\$id);

        if (\$row) {
            \$this->".$m."->delete(\$id);
            \$this->session->set_flashdata('message', 'delete');
            redirect(site_url('$c_url'));
        } else {
            \$this->session->set_flashdata('message', 'not');
            redirect(site_url('$c_url'));
        }
    }

    public function _rules() 
    {";
foreach ($non_pk as $row) {
    $int = $row3['data_type'] == 'int' || $row['data_type'] == 'double' || $row['data_type'] == 'decimal' ? '|numeric' : '';
    $string .= "\n\t\$this->form_validation->set_rules('".$row['column_name']."', '".  strtolower(label($row['column_name']))."', 'trim|required$int');";
}    
$string .= "\n\n\t\$this->form_validation->set_rules('$pk', '$pk', 'trim');";
$string .= "\n\t\$this->form_validation->set_error_delimiters('<span class=\"text-danger\">', '</span>');
    }";
    

$string .= "\n\n}\n\n/* End of file $c_file */
/* Location: ./application/controllers/$c_file */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator ".date('Y-m-d H:i:s')." */
/* http://harviacode.com */";




$hasil_controller = createFile($string, $target . "controllers/" . $c_file);
