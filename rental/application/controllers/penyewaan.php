<?php
class penyewaan extends CI_Controller{
    public function __construct(){
        parent::__construct();
        //$this->load->model('dashboard_model');
    }
    public function index(){

        $this->load->view('head');
        $this->load->view('penyewaan');
        $this->load->view('footer');
        }
}
?>