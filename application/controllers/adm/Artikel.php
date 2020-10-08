<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

	public function __construct()
	{
        parent::__construct();
        $this->load->model('MArtikel','ma');
    }

    public function artikel()
    {
        $data = [
			'view' => 'artikel/artikel',
			'js' => 'artikel/artikel.js'
        ];
        
		$this->load->view('adm/_main',$data);
    }
    
    public function tmb_artikel()
    {
        $data = [
			'view' => 'artikel/tmb_artikel',
			'js' => 'artikel/tmb_artikel.js',
			'js_all' => 'artikel/all.js',
        ];
        
		$this->load->view('adm/_main',$data);
    }

    public function edt_artikel($id)
    {
        $data = [
			'view' => 'artikel/edt_artikel',
			'js' => 'artikel/edt_artikel.js',
            'js_all' => 'artikel/all.js',
            'd' =>  $this->ma->get_artikel($id)->row(),
        ];
        
		$this->load->view('adm/_main',$data);
    }

    public function dt_artikel()
    {
        $date = $this->input->post('date');
        echo $this->ma->dt_artikel('',$date);
    }

    public function jsn_artikel()
    {
        $rsp = "data tidak ditemukan";
        $data = [];
        $id = $this->input->get('id');
        if ($id != '') {
            $q = $this->ma->get_artikel($id);
            if ($q->num_rows() > 0) {
               $data = $q->row_array();
               $data['tag'] = $this->ma->get_artikel_tag(['artikel_id' => $q->row()->id])->result();
               $data['gmb'] = $this->ma->get_artikel_gmb(['artikel_id' => $q->row()->id])->result();
               $rsp = json_encode($data);
            }
        }else{
            $q = $this->ma->get_artikel();
            if($q) $rsp = json_encode($q->result());
        }
        echo $rsp;
    }

    public function import_gmb()
    {
        $qgmb = $this->bantuan->upload_multiple('gmb');
        echo json_encode($qgmb);
    }

    public function del_gmb_artikel()
    {
        $rsp = [
            'status' => false,
            'msg' => 'Gagal menghapus gambar artikel'
        ];
        $id = $this->input->post('id');
        $x = $this->ma->de_artikel_gmb($id);
        if ($x) {
            $rsp = [
                'status' => true,
                'msg' => 'Berhasil menghapus gambar artikel'
            ];
         }

         echo json_encode($rsp);
    }

    public function in_artikel()
    {
        $gambar = [];
        $kategori = [];
        $tag = [];
        $qgmb = [];

        $rsp = [
            'status' => false,
            'msg' => 'Gagal menambahkan artikel'
        ];

        $judul = $this->input->post('judul');
        $isi = $this->input->post('isi');
        $ikategori = $this->input->post('kategori');
        $itag = $this->input->post('tag');

        $qgmb = $this->bantuan->upload_multiple2('gmb');

        $obj = [
            'judul' => $judul,
            'isi' => $isi,
        ];

        $x = $this->ma->in($obj);
        $artikel_id = $this->db->insert_id();

        if (!empty($qgmb)) {
            
            foreach ($qgmb as $g) {
               
                $gmb = [
                'artikel_id' => $artikel_id,
                 'img' => $g['file_name'],
                 'file_path' => $g['file_path'],
                 'orig_name' => $g['orig_name'],
                 'file_ext' => $g['file_ext'],
                 'file_size' => $g['file_size'],
                 'image_width' => $g['image_width'],
                 'image_height' => $g['image_height'],
                 'image_type' => $g['image_type']
                ];

                array_push($gambar,$gmb);
            }
        }
        
        foreach ($itag as $v) {
            $tg = [
                'artikel_id' => $artikel_id,
                'tag_id' => $v
            ];

            array_push($tag,$tg);
        }

        $this->ma->in_artikel_gmb($gambar);
        $this->ma->in_artikel_kateg($kategori);
        $this->ma->in_artikel_tag($tag);
        
        if ($x) {
           $rsp = [
               'status' => true,
               'callback' => site_url('adm/Artikel/artikel'),
               'msg' => 'Berhasil menambahkan artikel'
           ];
        }

        echo json_encode($rsp);
    }

    public function up_artikel()
    {
        $gambar = [];
        $kategori = [];
        $tag = [];
        $qgmb = [];

        $rsp = [
            'status' => false,
            'msg' => 'Tidak ada data yang terubah'
        ];

        $artikel_id = $this->input->post('artikel_id');
        $judul = $this->input->post('judul');
        $isi = $this->input->post('isi');
        $itag = $this->input->post('tag');

        $qgmb = $this->bantuan->upload_multiple2('gmb');

        $obj = [
            'judul' => $judul,
            'isi' => $isi,
        ];

        $x = $this->ma->up($obj,$artikel_id);

        if (!empty($qgmb)) {
            
            foreach ($qgmb as $g) {
               
                $gmb = [
                'artikel_id' => $artikel_id,
                 'img' => $g['file_name'],
                 'file_path' => $g['file_path'],
                 'orig_name' => $g['orig_name'],
                 'file_ext' => $g['file_ext'],
                 'file_size' => $g['file_size'],
                 'image_width' => $g['image_width'],
                 'image_height' => $g['image_height'],
                 'image_type' => $g['image_type']
                ];

                array_push($gambar,$gmb);
            }
        
            $this->ma->in_artikel_gmb($gambar);

        }
        
        if (!empty($itag)) {
            foreach ($itag as $v) {
                $tg = [
                    'artikel_id' => $artikel_id,
                    'tag_id' => $v
                ];

                array_push($tag,$tg);
            }
        }
            
        $x2 = $this->ma->up_artikel_tag($tag,$artikel_id);
        
        if ($x || $x2) {
           $rsp = [
               'status' => true,
               'callback' => site_url('adm/Artikel/artikel'),
               'msg' => 'Berhasil mengubah artikel'
           ];
        }

        echo json_encode($rsp);
    }

    public function de_artikel()
    {
        $rsp = [
            'status' => false,
            'msg' => 'Gagal menghapus artikel'
        ];
        $id = $this->input->post('id');
        $x = $this->ma->de_artikel($id);
        if ($x) {
            $this->ma->de_artikel_id_gmb($id);
            $this->ma->de_artikel_id_tag($id);
            $rsp = [
                'status' => true,
                'msg' => 'Berhasil menghapus artikel'
            ];
         }

         echo json_encode($rsp);
    }

    public function set_aktif()
    {
        $rsp = [
            'status' => false,
            'msg' => 'Gagal mengubah artikel menjadi aktif'
        ];

        $id = $this->input->post('id');
        $x = $this->ma->set_aktif($id);
        
        if ($x) {
           $rsp = [
               'status' => true,
               'msg' => 'Berhasil mengubah artikel menjadi aktif'
           ];
        }

        echo json_encode($rsp);
    }

    public function set_tidak_aktif()
    {
        $rsp = [
            'status' => false,
            'msg' => 'Gagal mengubah artikel menjadi tidak aktif'
        ];

        $id = $this->input->post('id');
        $x = $this->ma->set_tidak_aktif($id);
        
        if ($x) {
           $rsp = [
               'status' => true,
               'msg' => 'Berhasil mengubah artikel menjadi tidak aktif'
           ];
        }

        echo json_encode($rsp);
    }
    
    public function get_kateg()
    {
        $this->load->model('MKategori','mk');
        echo json_encode($this->mk->get()->result());
    }

    public function get_tag()
    {
        $this->load->model('MTag','mt');
        echo json_encode($this->mt->get()->result());
    }
}
