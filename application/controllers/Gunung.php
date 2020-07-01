<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
/** @noinspection PhpIncludeInspection */
require APPPATH . 'libraries/REST_Controller.php';


class Gunung extends REST_Controller {

    function __construct(){
        parent::__construct();
        $this->load->model('Gng');
    }

    public function index_get()
    {
        $id = $this->get('gunung');

        if ($id != NULL)
        {
            $this->db->like('nama_gunung',$id);
            $final = $this->db->get('gunung');
            if($final->num_rows()<=0){
                $this->response([
                    'status'=>'Data tidak ditemukan !'
                ], REST_Controller::HTTP_OK);
            }else{
                $this->response(
                    $final->result()
                , REST_Controller::HTTP_OK);
            }
        }else{
            $final = $this->db->get('gunung');
            if($final->num_rows()<=0){
                $this->response([
                    'status'=>'Data masih kosong !'
                ], REST_Controller::HTTP_OK);
            }else{
                $this->response(
                    $final->result()
                , REST_Controller::HTTP_OK);
            }

        }
    }

    public function index_post()
    {
        if(($this->post('nama')!=null)&&($this->post('tinggi')!=null)&&($this->post('status')!=null)){
            $data = [
                'nama_gunung' => $this->post('nama'),
                'ketinggian' => $this->post('tinggi'),
                'status' => $this->post('status')
            ];

            if($this->Gng->insert($data) > 0){
                $this->response([
                    'status' => true,
                    'pesan' => 'Data ditambahkan'
                ], REST_Controller::HTTP_CREATED);
            } else {
                $this->response([
                    'status' => false,
                    'pesan' => 'Gagal tambah data'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        }else{
            $this->response([
                'status' => true,
                'pesan' => 'Parameter belum lengkap !'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    public function index_delete()
    {
        $id = $this->delete('id');

        // Validate the id.
        if ($id === null )
        {
            $this->response([
                'status' => false,
                'pesan' => 'Id tidak dikirim'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }else{
            if ($this->Gng->delete($id) > 0){
                $this->response([
                    'status' => true,
                    'id' => $id,
                    'pesan' => 'Data telah dihapus'
                ], REST_Controller::HTTP_OK);
            }else{
                $this->response([
                    'status' => false,
                    'pesan' => 'Id tidak ditemukan'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        }
    }

  

    function index_put() {
        $id = $this->put('id');
        $message = [
            'nama' => $this->put('nama'),
            'nim' => $this->put('nim'),
            'alamat' => $this->put('alamat')
        ];
        if ($this->Mhs->update($id,$message) > 0) {
            $this->response([
                'status' => true,
                'id' => $id,
                'pesan' => 'Data berhasil diupdate'
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'pesan' => 'Gagal update data'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}