<?php
class m_dashboard extends CI_Model{
    public function tampil_data()
    {
        return $this->db->get('mobil')->result_array();
    }
}