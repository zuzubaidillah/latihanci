<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Foto extends CI_Controller
{
    // fungsi index dijalankan jika url hanya ditulis domain.com/foto
    public function index()
    {
        $this->load->view('vfoto');
    }

    // function edit membuat parameter $id_foto=0 guna untuk mengetahui data yang akan dihapus
    public function edit($id_foto=0)
    {
        // logika id_foto jika di rubah2    
        if ($id_foto==0) {
            echo "Website eror";
        }else{
            echo $id_foto;
        }
        // memanggil file tampilan website vfoto
        $this->load->view('vfoto');
    }

}
