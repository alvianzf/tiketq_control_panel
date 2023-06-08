<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {
    public function __construct() {
        parent::__construct();

        $this->load->model('mdlsearch');
    }

    public function result() {
        $asal = $this->input->post('kota_asal');
        $tujuan = $this->input->post('kota_tujuan');
        $tgl_keberangkatan = $this->input->post('tgl_keberangkatan');
        $data['pesawat'] = $this->mdlsearch->getPesawat($asal, $tujuan);
        
            // $data = array('kode_pesawat'=>$asal,
            //     'nama_pesawat'=>$tujuan,
            //     'keberangkatan'=>'Jambi',
            //     'tujuan'=>'Jakarta');
            // $this->db->insert('tb_pesawat',$data);
        
        $this->load->view('resultSearch', $data);
    }
}

?>