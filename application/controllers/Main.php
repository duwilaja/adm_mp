<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function __construct()
	{
        parent::__construct();
        $this->load->model('MArtikel','ma');
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
