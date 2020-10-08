<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MSubkateg extends CI_Model {

    private $t = 'subkateg s';
    public $see = '*';
    public $n = '';
    public $o = '';

    public function get($id='',$where='',$query='',$limit='',$start='')
    {
        $q = false;

        if ($id != '') {
            $this->db->order_by('id', 'desc');
            $this->db->select($this->see);
           $q = $this->db->get_where($this->t, [$this->id => $id],$this->n,$this->o);
        }elseif ($where != '') {
            $this->db->order_by('id', 'desc');
            $this->db->select($this->see);
           $q = $this->db->get_where($this->t, $where,$this->n,$this->o);
        }elseif ($query != '') {
            $q = $this->db->query($query);
        }elseif($limit != ''){
            $this->db->order_by('id', 'desc');
            $this->db->select($this->see);
            $q = $this->db->get_where($this->t,$where,$this->n,$this->o);
        }else{
            $this->db->order_by('id', 'desc');
            $this->db->select($this->see);
           $q = $this->db->get($this->t,$this->n,$this->o);
        }

        return $q;
    }

    public function in($obj=[])
    {
        $s = false;
        if (!empty($obj)) {
            
            $obj['ctddate'] = date('Y-m-d');
            $obj['aktif'] = 1;
            $obj['ctdby'] = $this->session->userdata('info_usr_id');

            $this->db->insert('artikel',$obj);
            $q = $this->db->affected_rows();
            if ($q > 0) {
                $s = true;
            }
        }

        return $s;
    }

    public function up($obj=[],$id='')
    {
        $s = false;
        if (!empty($obj)) {
            $this->db->update('artikel',$obj,['id' => $id]);
            $q = $this->db->affected_rows();
            if ($q > 0) {
                $s = true;
            }
        }

        return $s;
    }

    public function get_artikel($id='')
    {
        $this->see = "aiu.nama,a.*";
        $this->db->join('adm_info_usr aiu', 'aiu.id = a.ctdby', 'inner');
        if ($id != '') {
            $q = $this->get('',['a.id' => $id]);
        }else{
            $q = $this->get();
        }
        return $q;
    }

    public function de_artikel($id='')
    {
        $s = false;
        if (!empty($id) && $id != '') {

            $this->db->delete('artikel',['id' => $id]);
            $gmb = $this->get_artikel_gmb(['artikel_id' => $id]);
            foreach ($gmb->result() as $v) {
                unlink('data/artikel/'.$v->img);               
            }

            $this->db->delete('artikel_gmb',['artikel_id' => $id]);
            $this->db->delete('artikel_kateg',['artikel_id' => $id]);
            $this->db->delete('artikel_tag',['artikel_id' => $id]);

            $s = true;
        }

        return $s;
    }

    public function dt_artikel($aktif='',$date='')
    {
        // Definisi
        $condition = [];
        $data = [];

        $CI = &get_instance();
        $CI->load->model('DataTable', 'dt');

        // Set table name
        $CI->dt->table = 'artikel a';
        // Set orderable column fields
        $CI->dt->column_order = [null, 'a.judul','a.ctddate','aiu.nama',null];
        // Set searchable column fields
        $CI->dt->column_search = ['a.judul','a.ctddate','aiu.nama'];
        // Set select column fields
        $CI->dt->select = 'a.id,a.ctddate,a.judul,aiu.nama,a.aktif';
        // Set default order
        $CI->dt->order = ['a.id' => 'desc'];

        if ($aktif != '') {
            $con = ['where','a.aktif',$aktif];
            array_push($condition,$con);
        }

        if ($date != '') {
            $con = ['where','a.ctddate',$date];
            array_push($condition,$con);
        }

        $con = ['join','adm_info_usr aiu','aiu.id = a.ctdby','inner'];
        array_push($condition,$con);

        // Fetch member's records
        $dataTabel = $this->dt->getRows(@$_POST, $condition);

        $i = @$this->input->post('start');
        foreach ($dataTabel as $dt) {
            $check = ($dt->aktif == 1 ? 'checked' : '');
            $i++;
            $data[] = array(
                $i,
                $dt->judul,
                tgl_indo($dt->ctddate),
                $dt->nama,
                '<a href="'.site_url('adm/Artikel/tmb_artikel/'.$dt->id).'"><button class="btn btn-default btn-sm text-uppercase font-weight-bold text-gray" style="padding:3px 10px !important;font-size: 13px;"><i class="fa fa-edit"></i></button></a>
                <a href="#"><button class="btn btn-danger btn-sm text-uppercase font-weight-bold" onclick="de_artikel('.$dt->id.')" style="padding:3px 10px !important;font-size: 13px;"><i class="fa fa-trash"></i></button></a>
                '
            );
        }

        $output = array(
            "draw" => @$this->input->post('draw'),
            "recordsTotal" => $this->dt->countAll($condition),
            "recordsFiltered" => $this->dt->countFiltered(@$_POST, $condition),
            "data" => $data,
        );

        // Output to JSON format
        return json_encode($output);
    }

    public function set_aktif($id='')
    {
        $s = false;
        if($id != ''){
            $s = $this->up(['aktif' => 1],$id);
        }

        return $s;
    }

    public function set_tidak_aktif($id='')
    {
        $s = false;
        if($id != ''){
            $s = $this->up(['aktif' => 0],$id);
        }

        return $s;
    }

    // Artikel Kategori

    public function get_artikel_kateg($obj=[])
    {
        $this->db->join('kategori k', 'k.id = at.kategori_id', 'inner');
        if (empty($obj)) {
            $s = $this->db->get('artikel_kateg at');
        }else{
            $s = $this->db->get_where('artikel_kateg at', $obj);
        }
        return $s;
    }
    
    public function in_artikel_kateg($obj=[])
    {
        $s = false;
        if (!empty($obj)) {
            $this->db->insert_batch('artikel_kateg', $obj);
            $q = $this->db->affected_rows();
            if ($q > 0) {
                $s = true;
            }
        }

        return $s;
    }

    public function de_artikel_kateg($id='')
    {
        $s = false;
        if (!empty($id) && $id != '') {
            $this->db->delete('artikel_kateg', ['id' => $id]);
            $q = $this->db->affected_rows();
            if ($q > 0) {
                $s = true;
            }
        }

        return $s;
    }

    // Artikel Gambar
    public function get_artikel_gmb($obj=[])
    {
        $s = $this->db->get_where('artikel_gmb', $obj);
        return $s;
    }

    public function in_artikel_gmb($obj=[])
    {
        $s = false;
        if (!empty($obj)) {
            $this->db->insert_batch('artikel_gmb', $obj);
            $q = $this->db->affected_rows();
            if ($q > 0) {
                $s = true;
            }
        }

        return $s;
    }

    public function de_artikel_gmb($id='')
    {
        $s = false;
        if (!empty($id) && $id != '') {
            $this->db->delete('artikel_gmb', ['id' => $id]);
            $q = $this->db->affected_rows();
            if ($q > 0) {
                $s = true;
            }
        }

        return $s;
    }

    // Artikel Tag
    public function get_artikel_tag($obj=[])
    {
        $this->db->join('tag t', 't.id = at.tag_id', 'inner');
        $s = $this->db->get_where('artikel_tag at', $obj);
        return $s;
    }

    public function in_artikel_tag($obj=[])
    {
        $s = false;
        if (!empty($obj)) {
            $this->db->insert_batch('artikel_tag', $obj);
            $q = $this->db->affected_rows();
            if ($q > 0) {
                $s = true;
            }
        }

        return $s;
    }

    public function de_artikel_tag($id='')
    {
        $s = false;
        if (!empty($id) && $id != '') {
            $this->db->delete('artikel_tag', ['id' => $id]);
            $q = $this->db->affected_rows();
            if ($q > 0) {
                $s = true;
            }
        }

        return $s;
    }

}

/* End of file MUsers.php */
