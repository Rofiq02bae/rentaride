<?php
class dashboard extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('m_dashboard');
    }
    public function index(){
        $data['kendaraan'] = $this->m_dashboard->tampil_data();
        $this->load->view('head');
        $this->load->view('dashboard', $data);
        $this->load->view('footer');
        }
}
?>