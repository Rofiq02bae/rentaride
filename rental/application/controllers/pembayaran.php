<?php
class pembayaran extends CI_Controller{
    public function __construct(){
        parent::__construct();
        //$this->load->model('dashboard_model');
    }
    public function index(){

        $this->load->view('head');
        $this->load->view('pembayaran');
        $this->load->view('footer');
        }
}
?>