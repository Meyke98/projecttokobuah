<?php
require APPPATH . 'libraries/REST_Controller.php';
class Pasien extends REST_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function index_get($id = 0)
    {
        if(!empty($id)){
            $data = $this->db->get_where("pasiens", ['no_rm' => $id])->result();
        }else{
            $data = $this->db->get("pasiens")->result();
        }
        $this->response($data, REST_Controller::HTTP_OK);
    }
    public function index_post()
    {
        $input - $this->input->post();
        $this->db->insert('pasien', $input);

        $this->response(['Pasien created successfully.'], REST_Controller::HTTP_OK);
    }
    public function index_delete($id)
    {
        $this->db->delete('pasiens',array('no_rm'->$id));

        $this->response(['Pasien deleted successfully.'], REST_Controller::HTTP_OK);
    }
}