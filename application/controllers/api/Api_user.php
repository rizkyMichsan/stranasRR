<?php
use Restserver\Libraries\REST_Controller;


defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';

class Api_User extends REST_Controller
{
    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('Front_model', 'front');
    }
    public function index_get()
    {
        $id = $this->get('id_article');

        if ($id === null) {
            $user = $this->front->all('article')->result_array();
        } else {
            $user = $this->front->where('article', array("id_article" => $id))->result_array();
        }

        if ($user) {
            $this->response([
                'status' => true,
                'data' => $user
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => FALSE,
                'message' => 'users Not found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }
    public function index_delete()
    {
        $id = $this->get('id');
        if ($id === null) {
            $this->response([
                'status' => FALSE,
                'message' => 'users Not found'
            ], REST_Controller::HTTP_BAD_REQUEST);
        } else { }
    }
}
