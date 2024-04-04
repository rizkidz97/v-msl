<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Modul extends CI_Controller
{
    function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('status') != "telah_login") {
            redirect(base_url() . 'home?alert=belum_login#login');
        } else if ($this->session->userdata('level') != "Administrator") {
            redirect(base_url() . 'home?alert=bukan_admin#login');
        }
    }

    public function hukum_hooke()
    {
        $data = array(
            'judul' => "Modul Hukum Hooke"
        );
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/header');
        $this->load->view('modul/hukum-hooke', $data);
        $this->load->view('template/footer');
    }

    public function upload_hukum_hooke()
    {
        var_dump($_POST);
        die;
        $id_admin = $this->input->post('id_admin');
        $nama_admin = $this->input->post('nama_admin');
        $telepon = $this->input->post('telepon');
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        if (isset($_FILES['foto']['name']) && $_FILES['foto']['name'] != '') {
            $config['upload_path'] = './assets/images/foto_profil/';
            $config['allowed_types'] = 'jpeg|jpg|png';
            $config['max_size'] = 1000;
            $config['max_width'] = 1000;
            $config['max_height'] = 1000;

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) //jika gagal upload
            {
                echo "gagal";
                die;
                $error = array('error' => $this->upload->display_errors()); //tampilkan error
                redirect(base_url() . 'administrator/data_pengguna/admin', $error);
            } else {
                $file = $this->upload->data();
                $foto = $file['file_name'];
            }
        } else {
            $foto = $this->input->post('foto_default');
        }

        $where = [
            'id_admin' => $id_admin
        ];

        $data = [
            'foto' => $foto,
            'nama_admin' => $nama_admin,
            'telepon' => $telepon,
            'username' => $username,
            'passconf' => $password,
            'password' => md5($password)
        ];
        $this->m_crud->update_data($where, $data, 'admin');
    }

    public function rangkaian_listrik()
    {
        $data = array(
            'judul' => "Modul Rangkaian Listrik"
        );
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/header');
        $this->load->view('modul/rangkaian-listrik', $data);
        $this->load->view('template/footer');
    }
}
