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
        $id = $this->delete('id_article');
        if ($id === null) {
            $this->response([
                'status' => FALSE,
                'message' => 'Data Not found'
            ], REST_Controller::HTTP_BAD_REQUEST);
        } else {
            $hasil = $this->front->delete('article', $id, 'id_article');

            if ($hasil > 0) {
                # code...
                $this->response([
                    'status' => true,
                    'message' => 'Deleted'
                ], REST_Controller::HTTP_NO_CONTENT);
            } else {
                # code...
                $this->response([
                    'status' => FALSE,
                    'message' => 'Data Not Founds'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        }
    }
    public function index_post()
    {
        $data = [
            'username' => $this->post('username'),
            'title' => $this->post('title'),
            'url_article' => $this->post('url_article'),
            'isi_article' => $this->post('isi_article'),
            'hari' => $this->post('hari'),
            'tanggal' => $this->post('tanggal'),
            'jam' => $this->post('jam'),
            'gambar' => $this->post('gambar'),
            'video' => $this->post('video'),
            'poster_video' => $this->post('poster_video'),
            'embbed_video' => $this->post('embbed_video'),
            'status' => $this->post('status'),
            'dibaca' => $this->post('dibaca'),
            'id_menu' => $this->post('id_menu'),
            'document' => $this->post('document'),
            'komentar_status' => $this->post('komentar_status'),
            'tag' => $this->post('tag')
        ];
        if ($this->front->add('article', $data) > 0) {
            # code...
            $this->response([
                'status' => true,
                'message' => 'New Data has been created'
            ], REST_Controller::HTTP_CREATED);
        } else {
            # code...
            $this->response([
                'status' => FALSE,
                'message' => 'failed'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
    public function index_put()
    {
        # code...
        $id = $this->put('id_article');
        $data = [
            'username' => $this->put('username')
        ];

        if ($this->front->update('article', $id, $data, 'id_article') > 0) {

            # code...
            $this->response([
                'status' => true,
                'message' => 'Update Data has been success'
            ], REST_Controller::HTTP_NO_CONTENT);
        } else {
            # code...
            $this->response([
                'status' => FALSE,
                'message' => 'failed'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
