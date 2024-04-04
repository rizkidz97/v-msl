<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_login');
    }

    public function ceklogin()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => md5($password)
        );
        $cek_administrator = $this->m_login->cek_login('admin', $where)->num_rows();
        $cek_guru = $this->m_login->cek_login('guru', $where)->num_rows();
        // $cek_mahasiswa = $this->m_login->cek_login('mahasiswa',$where)->num_rows();
        if ($cek_administrator > 0) {
            $data = $this->m_login->cek_login('admin', $where)->row();
            $data_session = array(
                'id' => $data->id_admin,
                'nama_admin' => $data->nama_admin,
                'telepon' => $data->telepon,
                'username' => $data->username,
                'passconf' => $data->passconf,
                'foto' => $data->foto,
                'level' => 'Administrator',
                'status' => 'telah_login'
            );
            $this->session->set_userdata($data_session);
            redirect(base_url() . 'administrator/dashboard');
        } else if ($cek_guru > 0) {
            $data = $this->m_login->cek_login('guru', $where)->row();
            $data_session = array(
                'id' => $data->id_guru,
                'nama_guru' => $data->nama_guru,
                'telepon' => $data->telepon,
                'username' => $data->username,
                'passconf' => $data->passconf,
                'foto' => $data->foto,
                'level' => 'Guru',
                'status' => 'telah_login'
            );
            $this->session->set_userdata($data_session);
            redirect(base_url() . 'guru/dashboard');
             }else if($cek_guru > 0){
                 $data = $this->m_login->cek_login('guru',$where)->row();
                     $data_session = array(
                         'id_guru' => $data->id_guru,
                         'nama_guru' => $data->nama_guru,
                         'nama_sekolah' => $data->nama_sekolah,
                         'kelas' => $data->kelas,
                         'level' => 'Guru',
                         'status' => 'telah_login'
                     );
                     $this->session->set_userdata($data_session);
                     redirect(base_url().'guru/dashboard');
             }else if($cek_mahasiswa > 0){
                 $data = $this->m_login->cek_login('admin',$where)->row();
                     $data_session = array(
                         'id_admin' => $data->id_admin,
                         'nama_admin' => $data->nama_admin,
                         'nama_sekolah' => $data->nama_sekolah,
                         'kelas' => $data->kelas,
                         'level' => 'Mahasiswa',
                         'status' => 'telah_login'
                     );
                     $this->session->set_userdata($data_session);
                     redirect(base_url().'mahasiswa/dashboard');
        } else {
            redirect(base_url() . 'home?alert=gagal#login');
        }
    }

    public function keluar()
    {
        $this->session->sess_destroy();
        redirect(base_url() . 'home?alert=logout#login');
    }
}
