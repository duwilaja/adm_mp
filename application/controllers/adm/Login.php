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

    public function daftar()
    {
        $nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        
        $data = [
            'status' => false,
            'msg' => 'Gagal mendaftarkan akun'
        ];

        $ui = [
            'nama' => $nama,
        ];

        $u = [
            'email' => $email,
            'password' => md5($password),
        ];

        $cek = $this->mu->cek_user([
            'email' => $email
        ]);

        if ($cek[0]) {
            $data = [
                'status' => false,
                'msg' => 'Email yang anda masukan sudah digunakan, harap masukan email yang lain.'
            ];
        }else{
            $r = $this->mu->daftar_usr($ui,$u);
            if ($r[0]) {
                
                $array = array(
                    'id' => $r[1],
                    'mid' => md5($r[1])
                );
                
                $this->session->set_userdata( $array );
                
                $data = [
                    'status' => true,
                    'msg' => 'Berhasil mendaftarkan akun',
                    'redi' => site_url('Users/profile/'.md5($r[1]))
                ];
            }
        }
        echo json_encode($data);
    }

    public function login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $data = [
            'status' => false,
            'msg' => 'Gagal login, harap periksa kembali username dan password anda'
        ];

        $arr = ['email' => $email,'password' => md5($password),'aktif' => 1];

        $q = $this->mu->cek_user($arr);
        if ($q[0]) {
            
            $u = $q[1];

            $array = array(
                'id' => $u->usr_info_id,
                'mid' => md5($u->usr_info_id)
            );
            
            $this->session->set_userdata( $array );
            $data = [
                'status' => true,
                'redi' => site_url('Users/profile/'.md5($u->usr_info_id))
            ];
        }

        echo json_encode($data);
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
