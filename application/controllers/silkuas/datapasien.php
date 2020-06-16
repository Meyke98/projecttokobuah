<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Datapasien extends CI_Controller
{
    public function __construct()
    {
        parent :: __construct();
        $this->BASE_API="http://localhost/CodeIgniter/index.php";
        $this->load->library('curl');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('session');
    }

    //tampil
    public function index()
    {
        $data["pasiens"] = json_decode($this->curl->simple_get($this->BASE_API.'/api/pasien'));
        $this->load->view("Datapasien/patient_view",$data);
    }

    //insert
    function create()
    {
        if(isset($_POST['submit']))
        {
            $data = array(
                'no_rm'       =>  $this->input->post('id'),
                'nama'      =>  $this->input->post('nama'),
                'tipe_pasien'=>  $this->input->post('tipe_pasien'),
                'alamat'=>  $this->input->post('alamat'));
            $insert =  $this->curl->simple_post($this->API.'/pasien', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($insert)
            {
                $this->session->set_flashdata('hasil','Insert Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Insert Data Gagal');
            }
            redirect('Datapasien');
        }else{
            $this->load->view('Datapasien/tambah');
        }
    } 
    
    // edit
    function edit(){
        if(isset($_POST['submit'])){
            $data = array(
                'no_rm'       =>  $this->input->post('no_rm'),
                'nama'      =>  $this->input->post('nama'),
                'tipe_pasien'=>  $this->input->post('tipe_pasien'),
                'alamat'=>  $this->input->post('alamat'));
            $update =  $this->curl->simple_put($this->API.'/pasien', $data, array(CURLOPT_BUFFERSIZE => 10)); 
            if($update)
            {
                $this->session->set_flashdata('hasil','Update Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Update Data Gagal');
            }
            redirect('Datapasien');
        }else{
            $params = array('no_rm'=>  $this->uri->segment(3));
            $data['pasiens'] = json_decode($this->curl->simple_get($this->API.'/pasien',$params));
            $this->load->view('pasien/edit',$data);
        }
    }
}
?>
