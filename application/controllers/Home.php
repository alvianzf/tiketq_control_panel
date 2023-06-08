<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->model('model_rute_pesawat');
    }


    public function index()
    {
$data['rute_db'] = $this->model_rute_pesawat->pesawat_db();

header("Connection: Keep-alive"); 
error_reporting (E_ALL ^ E_NOTICE);
base_url('/vendor/autoload.php');
$client = new GuzzleHttp\Client();
$response = $client->request(
    'POST',
    'http://klikmbc.co.id/json/getcodearea-json',
);
$headers = $response->getHeaders();
$body = $response->getBody()->getContents();
$data['rute'] = json_decode($body);

  $data['title'] = "PT. Tiket";
		$this->load->view('index',$data);
    }
public function hasil_pencarian(){
$keberangkatan = $this->input->post('keberangkatan');
$tujuan = $this->input->post('tujuan');
       $kelas_penerbangan =  $this->input->post('kelas_penerbangan');
$data['hasil_pencarian'] = $this->model_rute_pesawat->hasil_pencarian_db($keberangkatan,$tujuan,$kelas_penerbangan);

       $this->load->view('hasil_pencarian',$data);
}

}
