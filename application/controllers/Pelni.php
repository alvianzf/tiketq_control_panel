<?php

    header("Connection: Keep-alive"); 
    error_reporting (E_ALL ^ E_NOTICE);
defined('BASEPATH') or exit('No direct script access allowed');

class Pelni extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('form_validation');
        if(empty($this->session->userdata('username'))){
        	redirect(base_url('login/logout'));
        }
    }

    public function index(){

    base_url('/vendor/autoload.php');
    $client = new GuzzleHttp\Client();
    $response = $client->request(
        'POST',
        'http://klikmbc.co.id/json/pelni/getcode',
    );
    $headers = $response->getHeaders();
    $body = $response->getBody()->getContents();
    $body_array = json_decode($body);
     $data =array(
         'judul'=>'DAFTAR KODE PELABUHAN',
        'isi'    => 'admin/pelni/utama',
        'data_tiket'=>$body_array);

        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }
    public function jadwal_pelni(){


    base_url('/vendor/autoload.php');
    $client = new GuzzleHttp\Client();
    $response = $client->request(
        'POST',
        'http://klikmbc.co.id/json/pelni/getschedule?username='.$this->session->userdata('username').'&password='.$this->session->userdata('password').'',
    );
    $headers = $response->getHeaders();
    $body = $response->getBody()->getContents();
    $body_array = json_decode($body);
            if ($body_array->reason == "invalid login") {
               $info = $body_array->reason;
            }else{
                 $info = '';
                 $hidden = 'hidden';
            }
        $data =array(
         'judul'=>'CARI JADWAL PELNI',
        'isi'    => 'admin/pelni/jadwal_pelni',
        'hidden'=> $hidden,
        'info'=>$info,
        'data_tiket'=>$body_array);

        $this->load->view('admin/layout/wrapper', $data, FALSE);
    }
}