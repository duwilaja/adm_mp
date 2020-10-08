<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
  
  class Bantuan {
    
    public $menu = '';
    private $mid = false;
    private $sid = false;
    private $f = false;
    
    public function __construct() {
      $this->CI = &get_instance();
    }

    public function upload_multiple($file='',$config=[])
    {
        $data = [];
        $config['upload_path']          = './data/artikel/';
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = 500;
        $config['max_width']            = 2048;
        $config['max_height']           = 1000;
        $config['encrypt_name'] 		= true;
            
            $this->CI->upload->initialize($config);
            
        $jumlah_berkas = count($_FILES[$file]['name']);
        for($i = 0; $i < $jumlah_berkas;$i++)
        {
                if(!empty($_FILES[$file]['name'][$i])){
    
            $_FILES['file']['name'] = $_FILES[$file]['name'][$i];
            $_FILES['file']['type'] = $_FILES[$file]['type'][$i];
            $_FILES['file']['tmp_name'] = $_FILES[$file]['tmp_name'][$i];
            $_FILES['file']['error'] = $_FILES[$file]['error'][$i];
            $_FILES['file']['size'] = $_FILES[$file]['size'][$i];
        
            // if($this->CI->upload->do_upload($file)){
            if($this->CI->upload->do_upload('file')){
              $uploadData = $this->CI->upload->data();
              array_push($data,$uploadData);
            }
          }
        }
        
        return $data;
    }
    
    public function upload_multiple2($file='',$config=[])
    {
        $data = [];
        $f = [];
        $config['upload_path']          = './data/artikel/';
        $config['allowed_types']        = 'jpg|png';
        $config['max_size']             = 0;
        $config['max_width']            = 0;
        $config['max_height']           = 0;
        $config['encrypt_name'] 		    = true;
            
        $this->CI->upload->initialize($config);
            
        $images = [];

        foreach ($_FILES[$file]['name'] as $key => $image) {
            $_FILES[$file.'[]']['name']= $_FILES[$file]['name'][$key];
            $_FILES[$file.'[]']['type']= $_FILES[$file]['type'][$key];
            $_FILES[$file.'[]']['tmp_name']= $_FILES[$file]['tmp_name'][$key];
            $_FILES[$file.'[]']['error']= $_FILES[$file]['error'][$key];
            $_FILES[$file.'[]']['size']= $_FILES[$file]['size'][$key];

            $this->CI->upload->initialize($config);

            if ($this->CI->upload->do_upload($file.'[]')) {
                $f[] = $this->CI->upload->data();
                array_push($images,$f);
            }
            // else {
            //    return  $this->CI->upload->display_errors();
            // }
        }

        return $f;
    }



    public function access($xx='',$karyawan_id='')
    {
        $r = false;
        
        $q = $this->CI->db->get_where('p_access',['karyawan_id' => $karyawan_id]);
        if ($q->num_rows() > 0) {
            $x = $q->row();
            $b = explode(',',$x->m_access_id);
            for ($i=0; $i < count($b) ; $i++) { 
              if ($xx == $b[$i]) {
                 $r = true;               
              }
            }
        }
        return $r;
    }

    public function accMenu($m='',$s='',$karyawan_id='')
    { 
      $r = false;
        
        $q = $this->CI->db->get_where('p_access',['karyawan_id' => $karyawan_id]);
        if ($q->num_rows() > 0) {
            $x = $q->row();
            
            $sub = explode(',',$x->m_access_id);
            for ($i=0; $i < count($sub) ; $i++) { 
              if ($s == $sub[$i]) {
                 $this->ids = true;               
              }
            }

            $men = explode(',',$x->sub_acc_id);
            for ($i=0; $i < count($men) ; $i++) { 
              if ($m == $men[$i]) {
                 $this->idm = true;               
              }
            }

            if ($x->leader != 1) {
              if ($this->idm && $this->ids) {
                $r = true;
              }
            }else{
              $r = true;
            }

        }
       
        return $r;
    }

    public function accFitur($m='',$s='',$karyawan_id='',$f='',$ret='')
    { 
      $r = false;
      $retx = '';
        
        $q = $this->CI->db->get_where('p_access',['karyawan_id' => $karyawan_id]);
        if ($q->num_rows() > 0) {
            $x = $q->row();
            
            $sub = explode(',',$x->m_access_id);
            for ($i=0; $i < count($sub) ; $i++) { 
              if ($s == $sub[$i]) {
                 $this->ids = true;               
              }
            }

            $men = explode(',',$x->sub_acc_id);
            for ($i=0; $i < count($men) ; $i++) { 
              if ($m == $men[$i]) {
                 $this->idm = true;               
              }
            }

            $fit = explode(',',$x->fitur);
            for ($i=0; $i < count($fit); $i++) { 
              if ($f == $fit[$i]) {
                 $this->f = true;               
              }
            }

            if ($x->leader != 1) {
              if ($this->idm && $this->ids && $this->f) {
                $r = true;
                $retx = $ret;
              }
            }else{
              $r = true;
              $retx = $ret;
            }

        }
       
        return [$r,$retx];
    }

    public function sendTeleg($chat_id='',$msg="")
    {
      
      $this->CI->load->model('MTeleg', 'tl');
      $tl = $this->CI->tl;;

      if ($chat_id != '' ) {
        $teleg = $tl->getApiSendMsg($chat_id,$msg);
      }else{
        $teleg = '';
      }

      return $teleg;

    }

    public function cekMenuLevel($mode)
    {
      if ($mode != 2) {
        $this->CI->load->model('MMenu', 'm');
        
        $uri = $this->CI->uri;
        $allow = [];
        $mtarget = [];
        $starget = [];

        $allow_menu = [
          'absensi',
          'dashboard',
          'payroll',
          'hcm',
          'finance',
          'training'
        ];

        $level = $this->CI->session->userdata('level');
        $menu = $this->CI->m->menu('',$level)->result();
        foreach ($menu as $m) {
          $mt = explode('/',$m->target);
          if ($mt[0] != '') {
            array_push($mtarget,$mt[0]);
          }
          $submenu = $this->CI->m->submenu('',$m->id)->result();
          foreach ($submenu as $s) {
            $st = explode('/',$s->target);
            if ($st[0] != '') {
              array_push($starget,$st[0]);
            }
          }
        }

        $mr1 = array_merge($mtarget,$starget);
        $mr2 = array_merge($mr1,$allow_menu);
        $allow = array_unique($mr2);
        
        if (!in_array($uri->segment(1), $allow)) redirect('/');
      }

    }

    public function menu($level='',$block='',$status=1)
    {
      if ($level == '') {
         $level = $this->CI->session->userdata('level');
      }

      if ($block == '') {
        $block = $this->CI->session->userdata('karyawan_id');
      }

        $this->CI->load->model('MMenu', 'm');
        $status = false;
        $msg = "Gagal meload data menu";
        $menus = [];
        $submenus = [];

       $menu =  $this->CI->m->menu('',$level,$status);
       foreach ($menu->result() as $v) {
           $submenus = []; 
           $submenu = $this->CI->m->submenu('',$v->id,$block,$status);
              foreach ($submenu->result() as $vx) {
                $sub = [
                      'id_submenu' => $vx->id,
                      'submenu' => $vx->submenu,
                      'icon' => $vx->icon == '' ? 'far fa-circle' : $vx->icon,
                      'target' =>  ($vx->target == '') ? '#' : site_url($vx->target)
                  ];

                  array_push($submenus,$sub);
              }

           $men = [
               'id_menu' => $v->id,
               'menu' => $v->menu,
               'icon' => $v->icon == '' ? 'fas fa-file-alt' : $v->icon,
               'type' => $v->type,
               'dropdown' => $v->type == 2 ? 'fas fa-angle-left' : '',
               'target' => ($v->target == '') ? base_url($this->CI->uri->uri_string()).'#' : site_url($v->target),
               'submenu' => $submenus
           ];
           array_push($menus,$men);
       }

       if (count($menus) > 0) {
           $status = true;
           $msg = "sukses load data menu";
       }

       $data = [
           'status' => true,
           'msg' => $msg,
           'data' => $menus
       ];

       return $data;
    }
    
    public function setup_menu()
    {
       $mn = '';
       $m = $this->menu();
       $s = $m['status'];
       $d['submenu'] = [];

       $lvl = $this->CI->session->userdata('level');
       if ($lvl != '') {
         
        if ($s) {
          foreach ($m['data'] as $d) {
            
          $mn .= '<li class="nav-item has-treeview"> 
              <a href="'.$d['target'].'?'.md5('idmenuaccess').'='.base64_encode(md5($d['id_menu'])).'" class="nav-link">
                <i class="nav-icon '.$d['icon'].'"></i>
                <p>
                  '.$d['menu'].'<i class="right '.$d['dropdown'].'"></i>
                </p>
              </a>'; //li utama
              
              if (@count(@$d['submenu'] > 0) && $d['type'] == 2) { 
                $mn .= '<ul class="nav nav-treeview fn14" style="display: none;">'; //ul utama
                
                foreach ($d['submenu'] as $sub) {
                    $mn .= '<li class="nav-item has-treeview">
                        <a href="'.$sub['target'].'?'.md5('idmenuaccess').'='.base64_encode(md5($d['id_menu'])).'" class="nav-link">
                          <i class="far fa-circle nav-icon"></i>
                          <p>'.$sub['submenu'].'</p>
                        </a>    
                      </li>';
                  }

                $mn .= '</ul>'; //tutup ul utama
              }
            $mn .= '</li>'; //tutup li utama
          }

          echo $mn;
        
        }else{
          echo "tidak ada";
        }
        
       }
       
    }

    public function menus()
    {
      
      $this->CI->load->model('MMenu', 'mm');
      return $this->CI->mm;
    }
    
    public function submenu_db($target='')
    {
      
      $this->CI->load->model('MMenu', 'mm');
      $m1 = $this->CI->mm->get('',['target' => $target])->row();
      $m = $this->CI->mm->get('',['induk_menu' => $m1->induk_menu,'induk_menu !=' => 0 ])->result();
      return $m;
    }
    
    public function getUser()
    {
      $data = [
        'username' => '',
        'nama' => ''
      ];
      
      $this->CI->load->model('MUsers', 'mu');
      $id = $this->CI->session->userdata('id');
      
      $q = $this->CI->mu->getUser('',['u.id' => $id]);
      
      if ($q->num_rows() > 0) {
        $q = $q->row();
        $data = [
          'username' => $q->username,
          'nama' => $q->nama
        ];
      }
      
      return $data; 
      
    }
    
    public function submenu()
    {
      $submenu = [
        ['Dashboard','main/index'],
        ['Products','main/products'],
        ['Programs','main/programs'],
        ['Sales','main/sales'],
        ['Projects','main/projek'],
        ['Cash','main/cash'],
        ['Perfomansi','main/perfomansi'],
        ['HCM','main/hcm'],
      ];
      
      return  $submenu;
    }
    
    public function cekMenu($ret='',$v1='',$v2='')
    {
      
      $this->menu = $v1[1];
      
      if ($v1==$v2) {
        return $ret;
      }else{
        return $ret.','.$v1.','.$v2;
      }
    }
    
    public function hjt($ok='',$ok2='') //Hitung jarak Tanggal
    {
      $tanggal = [];
      
      // Menghitung list tanggal dari tanggal yang sudah ditentukan sampai tanggal target
      $tm = strtotime($ok);
      $ta = strtotime($ok2);
      
      $timeDiff = abs($tm - $ta);
      
      $numberDays = $timeDiff/86400;  // 86400 seconds in one day
      
      // and you might want to convert to integer
      $numberDays = intval($numberDays);
      $lama_cuti = $numberDays;
      
      $num_lop = abs(($lama_cuti));
      array_push($tanggal,$ok);
      
      for ($i=0; $i < $num_lop ; $i++) { 
        $tm = $tm+86400;
        $time = date('Y-m-d',$tm);
        array_push($tanggal,$time);
      }
      
      return $tanggal;
    }
    
    public function htdt($ok='',$ok2='') //Hitung tanggal diantara target 
    {
      $tanggal = [];
      
      // Menghitung list tanggal dari tanggal yang sudah ditentukan sampai tanggal target
      $tm = strtotime($ok);
      $ta = strtotime($ok2);
      
      $timeDiff = abs($tm - $ta);
      
      $numberDays = $timeDiff/86400;  // 86400 seconds in one day
      
      // and you might want to convert to integer
      $numberDays = intval($numberDays);
      $lama_cuti = $numberDays+1;
      
      $num_lop = abs(($lama_cuti)-2);
      
      for ($i=0; $i < $num_lop ; $i++) { 
        $tm = $tm+86400;
        $time = date('Y-m-d',$tm);
        array_push($tanggal,$time);
      }
      
      return $tanggal;
    }

    public function tgl_indo($tanggal){
      $bulan = array (
        1=>'Januari',
        'Februari',
        'Maret',
        'April',
        'Mei',
        'Juni',
        'Juli',
        'Agustus',
        'September',
        'Oktober',
        'November',
        'Desember'
      );
      $tgl = explode(' ',$tanggal);
      $pecahkan = explode('-', $tgl[0]);
      
      // variabel pecahkan 0 = tanggal
      // variabel pecahkan 1 = bulan
      // variabel pecahkan 2 = tahun
     
      return @$pecahkan[2] . ' ' . @$bulan[ (int)$pecahkan[1] ] . ' ' . @$pecahkan[0];
    }

    

    public function penyebut($nilai='') {
      $nilai = abs($nilai);
      $huruf = array("", "satu", "dua", "tiga", "empat", "lima", "enam", "tujuh", "delapan", "sembilan", "sepuluh", "sebelas");
      $temp = "";
      if ($nilai < 12) {
        $temp = " ". $huruf[$nilai];
      } else if ($nilai <20) {
        $temp = $this->penyebut($nilai - 10). " belas";
      } else if ($nilai < 100) {
        $temp = $this->penyebut($nilai/10)." puluh". $this->penyebut($nilai % 10);
      } else if ($nilai < 200) {
        $temp = " seratus" . $this->penyebut($nilai - 100);
      } else if ($nilai < 1000) {
        $temp = $this->penyebut($nilai/100) . " ratus" . $this->penyebut($nilai % 100);
      } else if ($nilai < 2000) {
        $temp = " seribu" . $this->penyebut($nilai - 1000);
      } else if ($nilai < 1000000) {
        $temp = $this->penyebut($nilai/1000) . " ribu" . $this->penyebut($nilai % 1000);
      } else if ($nilai < 1000000000) {
        $temp = $this->penyebut($nilai/1000000) . " juta" . $this->penyebut($nilai % 1000000);
      } else if ($nilai < 1000000000000) {
        $temp = $this->penyebut($nilai/1000000000) . " milyar" . $this->penyebut(fmod($nilai,1000000000));
      } else if ($nilai < 1000000000000000) {
        $temp = $this->penyebut($nilai/1000000000000) . " trilyun" . $this->penyebut(fmod($nilai,1000000000000));
      }     
      return $temp;
    }
   
    public function terbilang($nilai='') {
      if($nilai<0) {
        $hasil = "minus ". trim($this->penyebut($nilai));
      } else {
        $hasil = trim($this->penyebut($nilai));
      }     		
      return $hasil;
    }
   
  }