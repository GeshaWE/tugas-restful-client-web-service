<?php
use GuzzleHttp\Client;


class Barang_model extends CI_model
{
    private $_client;

    public function __construct()
    {
        $this->_client = new Client([
            'base_uri' => 'http://localhost:8080/rest-server-1818041/'
        ]);
    }


    public function getAllBarang()
    {

        $response = $this->_client->request('GET', 'produk');

        $result = json_decode($response->getBody()->getContents(), true);

        return $result['message'];
    }

    public function getBarangById($id)
    {

        $response = $this->_client->request('GET', 'produk', [
            'query' => [
            'id' => $id
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result['message'][0];
    }

    public function tambahDataBarang()
    {
        $data = [
            "nama_barang" => $this->input->post('nama_barang', true),
            "harga" => $this->input->post('harga', true)
        ];

        $response = $this->_client->request('POST', 'produk', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function hapusDataBarang($id)
    {
        $response = $this->_client->request('DELETE', 'produk', [
            'form_params' => [
            'id' => $id
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function ubahDataBarang()
    {
       $data = [
            "nama_barang" => $this->input->post('nama_barang', true),
            "harga" => $this->input->post('harga', true),
            "id" => $this->input->post('id', true)
        ];

        $response = $this->_client->request('PUT', 'produk', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function cariDataBarang()
    {
        $cari = $this->input->post('cari', true);
        $this->db->like('nama_barang', $cari);
        return $this->db->get('product')->result_array();
    }
}