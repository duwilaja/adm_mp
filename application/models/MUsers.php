<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MUsers extends CI_Model {

    private $t = 'adm_users'; 

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

    public function cek_user($arr=[])
    {
        if (!empty($arr)) {
            $u = $this->db->get_where('users', $arr);
            if ($u->num_rows() > 0) {
                return [true,$u->row()];
            }
        }
       return [false];
    }

    public function daftar_usr($info_usr=[],$usr=[])
    {
        if (!empty($info_usr) && !empty($usr)) {

            $info_usr['ctddate'] = date('Y-m-d');
            $this->db->insert('usr_info', $info_usr);
            
            $usr_info_id = $this->db->insert_id();
            $jml = $this->db->affected_rows();
            
            if ($jml > 0) {
                
                $usr['ctddate'] = date('Y-m-d');
                $usr['usr_info_id'] = $usr_info_id;
                $usr['aktif'] = 1;

                $jml2 = $this->db->insert('users', $usr);
                if ($jml2 > 0) {
                    return [
                        true,
                        $usr_info_id
                    ];
                }
            }
        }

        return [false];
    }

}

/* End of file MUsers.php */
