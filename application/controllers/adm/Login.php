<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
        parent::__construct();
        $this->load->model('MUsers','mu');
        
    }
    
    public function proses_login()
    {   
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $arr = ['username' => $username,'password' => md5($password),'level !=' => '','aktif' => 1];

        $q = $this->mu->get('',$arr);
        if ($q->num_rows() > 0) {
            
            $u = $q->row();

            $array = array(
                'id' => $u->id,
                'info_usr_id' => $u->info_usr_id
            );
            
            $this->session->set_userdata( $array );
            redirect('adm/dashboard');
        }else{
            $this->session->set_flashdata('gagal', 'Username atau password tidak valid, silahkan periksa kembali username dan password yang anda masukan !');
            redirect($_SERVER['HTTP_REFERER']);
        }
        
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('adm/Login','refresh');
    }
    
    public function index()
    {
        $data = [
			'js' => 'login/login.js'
        ];
        
		$this->load->view('login',$data);
    }
	
}
