<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MVendor extends CI_Model {

    private $t = 'vendor'; 
    public $see = '*';

    public function get($id='',$where='',$query='',$limit='',$start='')
    {
        $q = false;

        if ($id != '') {
            $this->db->order_by('id', 'desc');
            $this->db->select($this->see);
           $q = $this->db->get_where($this->t, [$this->id => $id]);
        }elseif ($where != '') {
            $this->db->order_by('id', 'desc');
            $this->db->select($this->see);
           $q = $this->db->get_where($this->t, $where);
        }elseif ($query != '') {
            $q = $this->db->query($query);
        }elseif($limit != ''){
            $this->db->order_by('id', 'desc');
            $this->db->select($this->see);
            $q = $this->db->get_where($this->t,$where,$limit,$start);
        }else{
            $this->db->order_by('id', 'desc');
            $this->db->select($this->see);
           $q = $this->db->get($this->t);
        }

        return $q;
    }

    public function in_vendor($obj=[])
    {
        if (!empty($obj)) {
            $obj['ctddate'] = date('Y-m-d');
            $obj['ctdby'] = $this->session->userdata('id');
            $obj['usr_info_id'] = $this->session->userdata('id');
            $this->db->insert('vendor', $obj);
            $cek = $this->db->affected_rows();
            if ($cek > 0) {
                return true;
            }
        }
        
        return false;
    }

    public function get_vendor($vendor_id='',$kategori='')
    {
        $q = false;

        $this->db->join('vnd_kategori vk', 'vk.vendor_id = v.id', 'left');
        $this->db->join('kategori k', 'k.id = vk.kategori_id', 'left');
        
        if ($vendor_id != '') {
            $this->db->where('v.id', $vendor_id);
        }
        
        if (!empty($ketegori) && $ketegori != '') {
            $this->db->where('k.id', $ketegori);
        }

        $q =  $this->db->get('vendor v');  
        
        return $q;
    }

    public function get_daftar_serupa($vendor_id='',$limit='5')
    {
        $q = [];
        $g = $this->get_vendor($vendor_id);
        if ($g->num_rows() > 0) {
            $g = $g->row();
            $this->db->limit($limit);
            $q = $this->get_vendor('',$g->kategori_id);            
        } 

        return $q;
    }

    public function get_vnd_fasilitas($vendor_id='')
    {
        $this->db->join('fasilitas f', 'f.id = vf.fasilitas_id', 'inner');
        if ($vendor_id != '') {
            $this->db->where('vf.vendor_id', $vendor_id);
        }
        $q =  $this->db->get('vnd_fasilitas vf');

        return $q;
    }

    public function get_vnd_kategori($vendor_id='')
    {
        $this->db->join('kategori k', 'k.id = vk.kategori_id', 'inner');
        if ($vendor_id != '') {
            $this->db->where('vk.vendor_id', $vendor_id);
        }
        $q =  $this->db->get('vnd_kategori vk');

        return $q;
    }

    public function get_vnd_layanan($vendor_id='')
    {
        if ($vendor_id != '') {
            $this->db->where('vl.vendor_id', $vendor_id);
        }

        $q =  $this->db->get('vnd_layanan vl');

        return $q;
    }

    public function get_vnd_galeri($vendor_id='')
    {
        if ($vendor_id != '') {
            $this->db->where('vg.vendor_id', $vendor_id);
        }

        $q =  $this->db->get('vnd_galeri vg');

        return $q;
    }

    public function jam_buka($vendor_id='')
    {
        $jb_arr = [];
        if ($vendor_id != '') {
            
            $jb = $this->get_list_jam_buka($vendor_id)->result();
            foreach ($jb as $v) {
                $jbx = [
                    'hari' => $this->hari($v->code_day),
                    'jam_mulai' => hpdtk($v->jam_mulai),
                    'jam_akhir' => hpdtk($v->jam_akhir),
                    'open' => $this->cek_jam_buka($vendor_id,$v->code_day)
                ];
    
                array_push($jb_arr,$jbx);
            }
        }

        return $jb_arr;
    }

    public function get_list_jam_buka($vendor_id='')
    {
        $r = false;
        if($vendor_id != ''){
            $this->db->order_by('code_day', 'asc');
            $r = $this->db->get_where('vnd_jam_buka jb',['vendor_id' => $vendor_id,'aktif' => 1]);
        }

        return $r;  
    }

    private function hari($h='')
    {
        if ($h != '') {
            if ($h == '1') {
                return 'senin';
            }else if($h == '2'){
                return 'selasa';
            }else if($h == '3'){
                return 'rabu';
            }else if($h == '4'){
                return 'kamis';
            }else if($h == '5'){
                return "jum'at";
            }else if($h == '6'){
                return "sabtu";
            }else if($h == '7'){
                return "minggu";
            }
        }
    }

    private function cek_jam_buka($vendor_id='',$code_day='')
    {
        $r = false;
        if ($code_day == '') {
            $code_day = date('N');
        }

        if($vendor_id != '' && $code_day == date('N')){

            $jb = $this->db->get_where('vnd_jam_buka jb',['vendor_id' => $vendor_id,'code_day' => $code_day,'aktif' => 1]);
            // $jb = $this->db->get_where('jam_buka jb',['vendor_id' => $vendor_id]);
            if ($jb->num_rows() > 0) {
                $j = $jb->row();
                if (date('H:i:s') >= $j->jam_mulai && date('H:i:s') <= $j->jam_akhir ) {
                    $r = true;
                }
            }
        }

        return $r;  
    }

    private function cek_aktif($s='')
    {
        $r = '-';
        if($s != ''){
            if ($s == '1') {
                $r = 'Aktif';
            }else{
                $r = 'Tidak Aktif';
            }
        }

        return $r;  
    }

}

/* End of file MUsers.php */
