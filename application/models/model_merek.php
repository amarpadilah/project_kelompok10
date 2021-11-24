<?php

class Model_merek extends CI_Model
{
    public function data_vivo(){
        return $this->db->get_where("tb_barang",array('merek_hp ' => 'vivo'));
    }
}