<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
	{
        parent::__construct();
        $this->load->model('MVendor','mv');
    }

    public function profile()
    {
        $data = [
            'view_single' => 'profile',
            'js' => 'users/profile.js',
            'view' => 'users/_main',
        ];
        
        $this->load->view('frontend/_main',$data);
    }

    public function daftar_transaksi()
    {
        $data = [
            'view_single' => 'daftar_transaksi',
            'js' => 'users/daftar_transaksi.js',
            'view' => 'users/_main',
        ];
        
        $this->load->view('frontend/_main',$data);
    }

    public function tambah_produk()
    {
        $data = [
            'view_single' => 'tambah_produk',
            'js' => 'users/tambah_produk.js',
            'view' => 'users/_main',
        ];
        
        $this->load->view('frontend/_main',$data);
    }

    public function pengaturan()
    {
        $data = [
            'view_single' => 'pengaturan',
            'js' => 'users/pengaturan.js',
            'view' => 'users/_main',
        ];
        
        $this->load->view('frontend/_main',$data);
    }

    public function buka_toko()
    {
        $data = [
            'view_single' => 'buka_toko',
            'js' => 'users/buka_toko.js',
            'view' => 'users/_main',
        ];
        
        $this->load->view('frontend/_main',$data);
    }

    public function crt_buka_toko()
    {

        $status = false;
        $msg = "Gagal membuka toko";

        $nma_vendor = $this->input->post('nma_vendor');
        $link = $this->input->post('link');
        $lat = $this->input->post('lat');
        $lng = $this->input->post('lng');
        $desk = $this->input->post('desk');
        $img_back = '';

        $this->load->library('upload');

        $path = 'data/vnd/'.$this->session->userdata('mid');
        if (!file_exists($path)) {
            mkdir($path,0777);
        }
        
        $config['upload_path']          = $path;
        $config['allowed_types']        = 'jpeg|jpg|png';
        $config['encrypt_name']         = true;
        $config['max_size']             = 0;
        $config['max_width']            = 0;
        $config['max_height']           = 0;
        
        $this->upload->initialize($config);
        
        if (!$this->upload->do_upload('img_back')){
           $rsp['error'] = $this->upload->display_errors();
        }else{
           $img_back = $this->upload->data()['file_name'];
		}


        $obj = [
            'nma_vendor' => $nma_vendor,
            'link' => $link,
            'lat' => $lat,
            'lng' => $lng,
            'desk' => $desk,
            'back_img' => $img_back
        ];

        $cek = $this->mv->get('',['usr_info_id' => $this->session->userdata('id')]);
        $cek_link = $this->mv->get('',['link' => $link]);

        if ($cek->num_rows() > 0) {
            $msg = "Anda sudah membuka toko sebelumnya.";
            if ($img_back != '') {
                unlink($path.'/'.$img_back);
            }
        }else if ($cek_link->num_rows() > 0) {
            $msg = "Link yang anda masukan, sudah digunakan.";
            if ($img_back != '') {
                unlink($path.'/'.$img_back);
            }
        }else{
            $i = $this->mv->in_vendor($obj);
            if ($i) {
                $status = true;
                $msg = "Berhasil membuka toko";
            }
        }

        $rsp = [
            'status' => $status,
            'msg' => $msg,
            'redirc' => site_url('Users/dashboard')
        ];

        echo json_encode($rsp);
    }

    public function dashboard()
    {
        $data = [
            'view_single' => 'dashboard_toko',
            'js' => 'users/dashboard_toko.js',
            'view' => 'users/_main',
        ];
        
        $this->load->view('frontend/_main',$data);
    }

    public function info_toko()
    {
        $data = [
            'view_single' => 'info_toko',
            'js' => 'users/info_toko.js',
            'view' => 'users/_main',
        ];
        
        $this->load->view('frontend/_main',$data);
    }

    public function daftar_produk()
    {
        $data = [
            'view_single' => 'daftar_produk',
            'js' => 'users/daftar_produk.js',
            'view' => 'users/_main',
        ];
        
        $this->load->view('frontend/_main',$data);
    }
    
}
