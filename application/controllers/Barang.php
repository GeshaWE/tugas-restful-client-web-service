<?php

class Barang extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_model');
        $this->load->library('form_validation');
    }
   
    public function index()
    {
        $data['judul'] = 'Daftar Barang';
        $data['barang'] = $this->Barang_model->getAllBarang();
        if($this->input->post('cari'))
        {
            $data['barang'] = $this->Barang_model->cariDataBarang();
        }
        // $this->load->view('templates/header', $data);
        // $this->load->view('barang/index', $data);
        // $this->load->view('templates/footer');

        // baru 
        $this->load->view('templates/header_templatebaru', $data);
        $this->load->view('barang/index', $data);
        $this->load->view('templates/footer_templatebaru');
    }

    public function tambah()
    {
        $data['judul'] = 'Form Tambah Data';
        $this->form_validation->set_rules('nama_barang', 'Nama Barang', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');


        if ($this->form_validation->run() == FALSE)
        {
            // $this->load->view('templates/header', $data);
            // $this->load->view('barang/tambah');
            // $this->load->view('templates/footer');  
            
            // baru
            $this->load->view('templates/header_templatebaru', $data);
            $this->load->view('barang/tambah');
            $this->load->view('templates/footer_templatebaru');  
        }else {
                $this->Barang_model->tambahDataBarang();
                $this->session->set_flashdata('flash', 'Ditambahkan');
                redirect('barang');
        }
    }

    public function hapus($id)
    {
        $this->Barang_model->hapusDataBarang($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('barang');
    }

    public function detail($id)
    {
        $data['judul'] = 'Info Barang';
        $data['barang'] = $this->Barang_model->getBarangById($id);
        // $this->load->view('templates/header', $data);
        // $this->load->view('barang/detail', $data);
        // $this->load->view('templates/footer');

        // baru
        $this->load->view('templates/header_templatebaru', $data);
        $this->load->view('barang/detail', $data);
        $this->load->view('templates/footer_templatebaru');
    }

    public function ubah($id)
    {
        $data['judul'] = 'Form Ubah Data';
        $data['barang'] = $this->Barang_model->getBarangById($id);
        $this->form_validation->set_rules('nama_barang', 'Nama_Barang', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');

        if ($this->form_validation->run() == FALSE)
        {
            // $this->load->view('templates/header', $data);
            // $this->load->view('barang/ubah', $data);
            // $this->load->view('templates/footer');     

            // baru
            $this->load->view('templates/header_templatebaru', $data);
            $this->load->view('barang/ubah', $data);
            $this->load->view('templates/footer_templatebaru');  
        }
        
        else 
        {
            $this->Barang_model->ubahDataBarang();
            $this->session->set_flashdata('flash', 'Diubah');
            redirect('barang');
        }
    }

}