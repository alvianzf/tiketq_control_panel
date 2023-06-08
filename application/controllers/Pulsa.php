<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pulsa extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('m_pulsa');
$this->load->library('session');
         if (empty($this->session->userdata('username'))) {
            $this->session->set_flashdata('message_err', 'Anda harus login');
            redirect(base_url('login'));
        }
    }

    public function index() {
    $api = $this->m_pulsa->api();
    $data = array(
    'inquiry' => 'S',);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $api['url']);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_POSTREDIR, CURL_REDIR_POST_ALL);
curl_setopt($ch, CURLOPT_HTTPHEADER, $api['header']);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
$result = curl_exec($ch);
$result = json_decode($result);
$data['kode_pulsa']= $this->m_pulsa->get_all();
$data['url'] = $api['url'];
$data['header'] = $api['header'];
$data['title'] = "PT. Tiket";

$this->load->view('pulsa/index',$data);
    }

    public function data_pulsa(){
        $data_pulsa = $this->m_pulsa->get_all();
        $data = array(
            'judul'=>'Data Kode Pulsa',
            'data_pulsa'=>$data_pulsa,
            'isi'=>'pulsa/data_kode_pulsa');
        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }
    function tambah_kode_pulsa(){

        $kategori = $this->input->post('kategori');
        $kode= $this->input->post('kode');
        $deskripsi = $this->input->post('deskripsi');
        $harga = $this->input->post('harga');
        $data = array('kategori'=>$kategori,
                        'kode'=>$kode,
                        'deskripsi'=>$deskripsi,
                        'harga'=>$harga);
        $this->db->insert('kode_pulsa',$data);
        $this->session->set_flashdata('msg',
                     '
                     <div class="alert alert-success alert-dismissible" role="alert">'.'Berhasil menambahkan kode'.'</div>'
                   );
        redirect(base_url('pulsa/data_pulsa'));
    }
    function edit_kode(){

        $id = $this->input->post('id');
        $kode= $this->input->post('kode');
        $deskripsi = $this->input->post('deskripsi');
        $harga = $this->input->post('harga');
        $data = array(
                        'kode'=>$kode,
                        'deskripsi'=>$deskripsi,
                        'harga'=>$harga);
        $this->db->where('id',$id);
        $this->db->update('kode_pulsa',$data);
        $this->session->set_flashdata('msg',
                     '
                     <div class="alert alert-success alert-dismissible" role="alert">'.'Berhasil mengedit kode'.'</div>'
                   );
        redirect(base_url('pulsa/data_pulsa'));
    }

}

?>
