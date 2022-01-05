<?php

class home extends CI_Controller
{
    public function index($nama = '')
    {
        $data['judul'] = 'Halaman Home';
        $data['nama'] = $nama;
        // $this->load->view('templates/header', $data);
        // $this->load->view('home/index');
        // $this->load->view('templates/footer');


        // baru 
        $this->load->view('templates/header_templatebaru', $data);
        $this->load->view('home/index');
        $this->load->view('templates/footer_templatebaru');
    }
}