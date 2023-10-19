<?php
class Menu extends CI_Controller
{
    public function index()
    {
        $this->load->view('view-input-menu');
    }

    public function cetak()
    {
        $this->form_validation->set_rules('kode','Kode Menu','required|min_length[4]', [
            'required' => 'Kode Menu Harus diisi',
            'min_length' => 'Kode menu terlalu pendek'
        ]);
        
        $this->form_validation->set_rules('nama','Nama Menu','required|min_length[3]', [
            'required' => 'Nama Menu Harus diisi',
            'min_length' => 'Nama menu terlalu pendek'
        ]);

        $this->form_validation->set_rules('harga','Harga Menu','required', [
            'required' => 'Harga Menu Harus diisi',
        ]);

        if ($this->form_validation->run() != true) {
            $this->load->view('view-input-menu');
        } else {
            $data = [
                'kode' => $this->input->post('kode'),
                'nama' => $this->input->post('nama'),
                'harga' => $this->input->post('harga'),
                'gambar' => $this->input->post('gambar')
            ];
            
            $this->load->view('view-data-menu',$data);
        }
    }



}