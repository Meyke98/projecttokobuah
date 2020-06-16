<?php
require APPPATH . 'libraries/REST_Controller.php';
class Dokter extends REST_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function index_get($id = 0)
    {
        if(!empty($id)){
            $data = $this->db->get_where("dokters", ['id_dokter' => $id])->result();
        }else{
            $data = $this->db->get("dokters")->result();
        }
        $this->response($data, REST_Controller::HTTP_OK);
    }
    public function index_post()
    {
        $input - $this->input->post();
        $this->db->insert('dokter', $input);

        $this->response(['Dokter created successfully.'], REST_Controller::HTTP_OK);
    }
    public function index_delete($id)
    {
        $this->db->delete('dokters',array('id_dokter'->$id));

        $this->response(['Dokter deleted successfully.'], REST_Controller::HTTP_OK);
    }
}