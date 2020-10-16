<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor extends CI_Controller {

	public function __construct()
	{
        parent::__construct();
        $this->load->model('MVendor','mv');
    }

    public function detail_vendor($vendor_id='')
    {
        $vnd = $this->mv->get_vendor($vendor_id)->row();

        $data = [
			'view' => 'vendor/detail_vendor',
            'js' => 'vendor/detail_vendor.js',
            'data' => [
                'vnd' => $vnd ,
                'back_img' => base_url('data/vnd/'.md5($vnd->usr_info_id).'/'.$vnd->back_img),
                'vnd_ktg' => $this->mv->get_daftar_serupa($vendor_id)->result(),
                'fsl' => $this->mv->get_vnd_fasilitas($vendor_id)->result(),
                'glr' => $this->mv->get_vnd_galeri($vendor_id)->result(),
                'lyn' => $this->mv->get_vnd_layanan($vendor_id)->result(),
                'jb' => $this->mv->jam_buka($vendor_id),
            ]
        ];
        
        $this->load->view('frontend/_main',$data);

    }

}
