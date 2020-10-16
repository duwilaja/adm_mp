<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
        parent::__construct();
        $this->load->model('MVendor','mv');
        $this->load->model('MArtikel','ma');
    }

    public function test($vendor_id='')
    {
        $r = '-';
        if($vendor_id != ''){

            $jb = $this->db->get_where('vnd_jam_buka jb',['vendor_id' => $vendor_id,'code_day' => date('N'),'aktif' => 1]);
            // $jb = $this->db->get_where('jam_buka jb',['vendor_id' => $vendor_id]);
            if ($jb->num_rows() > 0) {
                $j = $jb->row();
                if (date('H:i:s') >= $j->jam_mulai && date('H:i:s') <= $j->jam_akhir ) {
                    $r = 'Buka';
                }else{
                    $r = 'Tutup';
                }
            }
        }

        return $r;  
    }

    public function index()
    {
        $data = [
			'view' => 'main/main',
            'js' => 'main/main.js',
            'new_artikel' => $this->get_artikel_new()
        ];
        
        $this->load->view('frontend/_main',$data);
    }

    public function cari()
    {
        $data = [
			'view' => 'main/cari',
            'js' => 'main/cari.js',
        ];
        
        $this->load->view('frontend/_main',$data);
    }

    public function cari_all()
    {
        $arr = [];
        $q = $this->input->get('q');
        if ($q) {
            $this->db->like('nma_vendor',$q);
        }
        $rq = $this->db->get('vendor v');
        if ($rq->num_rows() > 0 ) {
            $v = $rq->row();
            $arrx = [
                'id' => $v->id,
                'nma_vendor' => $v->nma_vendor,
                'back_img' => base_url('data/vnd/'.md5($v->usr_info_id).'/'.$v->back_img),
                'img_profile' => $v->img_profile == '' ? base_url('template2/images/avatar/1.jpg') : $v->img_profile,
                'lat' => $v->lat,
                'lng' => $v->lng,
                'alamat' => $v->alamat,
                'no_tlp' => $v->no_tlp,
                'email' => $v->email,
                'fasilitas' => $this->mv->get_vnd_fasilitas($v->id)->result(),
                'kategori' => $this->mv->get_vnd_kategori($v->id)->row()
            ];

            array_push($arr,$arrx);
        }

        echo json_encode($arr);
    }

     private function get_artikel_new($limit='5')
    {
        $data = [];
        $gmb['img'] = '';
        $this->db->limit($limit);
        $artk = $this->ma->get();
        foreach ($artk->result() as $k => $v) {
            $img = $this->ma->get_artikel_gmb(['artikel_id' => $v->id]);
            if ($img->num_rows() > 0) $gmb = $img->row(); 
            $a = [
                'id' => $v->id,
                'judul' => $v->judul,
                'ctddate'=> $v->ctddate,
                'img' => $gmb,
                'col' => $k == '4' ? 'col-md-8' : 'col-md-4'
            ];

            array_push($data, $a);
        }
       
        return $data;

    }
}
