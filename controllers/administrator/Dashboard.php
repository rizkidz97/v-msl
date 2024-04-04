<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller {
    function __construct()
    {
        parent::__construct();

        if($this->session->userdata('status')!="telah_login"){
            redirect(base_url().'home?alert=belum_login#login');
        }else if($this->session->userdata('level')!="Administrator"){
            redirect(base_url().'home?alert=bukan_admin#login');
        }
    }

    public function index()
    {
        $data = array(
            'judul' => "Dashboard"
        );
        $this->load->view('template/sidebar',$data);
        $this->load->view('template/header');
        $this->load->view('dashboard',$data);
        $this->load->view('template/footer'); 
    }
}