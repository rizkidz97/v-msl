<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
    public function index()
    {
        $this->load->view('home');
    }

    public function ceklogin()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => md5($password)
        );
        
        $this->load->model('m_login');
        $cek = $this->m_login->cek_login('user',$where)->num_rows();
        if($cek > 0){
            $data = $this->m_login->cek_login('user',$where)->row();
            $level = $data->level;
            if ($level=='Administrator') {
                $data_session = array(
                    'id_user' => $data->id_user,
                    'nama_user' => $data->nama_user,
                    'nama_sekolah' => $data->nama_sekolah,
                    'kelas' => $data->kelas,
                    'level' => $data->level,
                    'status' => 'telah_login'
                );
                $this->session->set_userdata($data_session);
                redirect(base_url().'administrator/dashboard');
            }elseif ($level=='Guru') {
                $data_session = array(
                    'id_user' => $data->id_user,
                    'nama_user' => $data->nama_user,
                    'nama_sekolah' => $data->nama_sekolah,
                    'kelas' => $data->kelas,
                    'level' => $data->level,
                    'status' => 'telah_login'
                );
                $this->session->set_userdata($data_session);
                redirect(base_url().'guru/dashboard');
            }elseif ($level=='Siswa') {
                $data_session = array(
                    'id_user' => $data->id_user,
                    'nama_user' => $data->nama_user,
                    'nama_sekolah' => $data->nama_sekolah,
                    'kelas' => $data->kelas,
                    'level' => $data->level,
                    'status' => 'telah_login'
                );
                $this->session->set_userdata($data_session);
                redirect(base_url().'mahasiswa/dashboard');
            }
        }else{
            redirect(base_url().'home?alert=gagal#login');
        }
    }

    public function keluar()
    {
        $this->session->sess_destroy();
        redirect(base_url().'home?alert=logout#login');
    }
}
