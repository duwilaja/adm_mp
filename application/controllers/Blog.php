<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function __construct()
	{
        parent::__construct();
        $this->load->model('MArtikel','ma');
        $this->load->model('MTag','mt');
    }

    public function index()
    {
        $this->blog_list();
    }

    public function blog_list()
    {
        $where = [];
        $tag = $this->input->get('tag');
        if ($tag) {
            $where['tag_id'] = $tag; 
        }
        
        $artikel = [];
        $data = [
			'view' => 'blog/blog_list',
			'js' => 'blog/blog_list.js',
            'js_all' => 'blog/all.js',
            'tag' => $this->mt->get()->result(),
            // 'pp' => $this->mt->get()->result()
        ];

        $this->load->library('pagination');
        
        // $config['first_link']       = 'First';
        // $config['last_link']        = 'Last';
        // $config['next_link']        = '<a class="nextposts-link">Next</a>';
        // $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagination">';
        $config['full_tag_close']   = '</div>';
        // $config['num_tag_open']     = 'fsafs';
        // $config['num_tag_close']    = 'asd';
        $config['cur_tag_open']     = '<a class="current-page">';
        $config['cur_tag_close']    = '</a>';
        // $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        // $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        // $config['next_tag_open']    = '<a class="nextposts-link">';
        // $config['next_tagl_close']  = '</a>';
        // $config['prev_tag_open']    = '<a class="prevposts-link"><i class="fas fa-caret-left">';
        // $config['prev_tagl_close']  = '<i class="fas fa-caret-left"></i><span>Prev</span></a>';
        // $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        // $config['first_tagl_close'] = '</span></li>';
        // $config['last_tag_open']    = '<a class="nextposts-link">';
        // $config['last_tagl_close']  = '</a>';
 
        $this->pagination->initialize($config);

		$config['base_url'] = base_url().'blog/blog_list';
		$config['total_rows'] = $this->ma->get_artikel('',$where)->num_rows();
		$config['per_page'] = 7;
		$from = $this->uri->segment(3);
        $this->pagination->initialize($config);	
        
        $this->ma->n = $config['per_page'];
        $this->ma->o = $from;
        
        $data['d'] = $this->get_artikel('',$where);

		$this->load->view('frontend/_main',$data);
    }

    public function blog_single($id)
    {
        $data = [
			'view' => 'blog/blog_single',
            'js' => 'blog/blog_single.js',
            'v' => $this->get_artikel($id),
            'tag' => $this->mt->get()->result(),
            'ap' => $this->get_atl_prev($id),
            'an' => $this->get_atl_next($id)
            // 'pp' => $this->mt->get()->result()
        ];
        
		$this->load->view('frontend/_main',$data);
    }

    private function get_artikel($id='',$where=[])
    {
        $artikel = [];
        if ($id == '') {

            $art = $this->ma->get_artikel($id,$where)->result();
            foreach ($art as $v) {
                array_push($artikel,[
                    'id' => $v->id,
                    'nama' => $v->nama,
                    'judul' => $v->judul,
                    'isi' => $v->isi,
                    'ctddate' => tgl_indo($v->ctddate),
                    'tag' => $this->ma->get_artikel_tag(['artikel_id' => $v->id])->result(),
                    'img' => $this->ma->get_artikel_gmb(['artikel_id' => $v->id])->result(),
                ]);
            }
        }else{
            $v = $this->ma->get_artikel($id,$where)->row();
            $artikel = [
                'id' => $v->id,
                'nama' => $v->nama,
                'judul' => $v->judul,
                'isi' => $v->isi,
                'ctddate' => tgl_indo($v->ctddate),
                'tag' => $this->ma->get_artikel_tag(['artikel_id' => $v->id])->result(),
                'img' => $this->ma->get_artikel_gmb(['artikel_id' => $v->id])->result(),
            ];
        }
        

        return $artikel;
    }

    private function get_atl_prev($id='')
    {
        $artikel = [];
        $id = $id - 1;
        $v = $this->ma->get_artikel($id)->row();
        if (!empty($v)) {
            $artikel = [
                'id' => $v->id,
                'judul' => $v->judul,
                'img' => $this->ma->get_artikel_gmb(['artikel_id' => $v->id])->row(),
            ];
        }
        return $artikel;
    }

    private function get_atl_next($id='')
    {
        $artikel = [];
        $id = $id + 1;
        $v = $this->ma->get_artikel($id)->row();
        if (!empty($v)) {
            $artikel = [
                'id' => $v->id,
                'judul' => $v->judul,
                'img' => $this->ma->get_artikel_gmb(['artikel_id' => $v->id])->row(),
            ];
        }
        
        return $artikel;
    }
    
}
