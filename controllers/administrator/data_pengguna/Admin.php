<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_crud');

        if ($this->session->userdata('status') != "telah_login") {
            redirect(base_url() . 'home?alert=belum_login#login');
        } else if ($this->session->userdata('level') != "Administrator") {
            redirect(base_url() . 'home?alert=bukan_admin#login');
        }
    }

    public function index()
    {
        $data = [
            'judul' => "Pengguna"
        ];
        $order = 'id_admin';

        $data['admin'] = $this->m_crud->get_data($order, 'admin')->result();
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/header');
        $this->load->view('pengguna/admin/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data = array(
            'judul' => "Pengguna"
        );
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/header');
        $this->load->view('pengguna/admin/tambah', $data);
        $this->load->view('template/footer');
    }

    public function aksi_tambah()
    {
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
        $data = [
            'foto' => $foto,
            'nama_admin' => $nama_admin,
            'telepon' => $telepon,
            'username' => $username,
            'passconf' => $password,
            'password' => md5($password)
        ];
        $this->m_crud->insert_data($data, 'admin'); //memasukan data ke database
        redirect(base_url() . 'administrator/data_pengguna/admin'); //mengalihkan halaman
    }

    public function ubah($id_admin)
    {
        $where = array(
            'id_admin' => $id_admin,
        );
        $data = array(
            'judul' => "Pengguna"
        );

        $data['admin'] = $this->m_crud->edit_data($where, 'admin')->result();
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/header');
        $this->load->view('pengguna/admin/ubah', $data);
        $this->load->view('template/footer');
    }

    public function aksi_ubah()
    {
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
        $this->m_crud->update_data($where, $data, 'admin'); //memasukan data ke database
        redirect(base_url() . 'administrator/data_pengguna/admin'); //mengalihkan halaman
    }

    public function hapus($id_admin)
    {
        $where = array(
            'id_admin' => $id_admin
        );
        $this->m_crud->delete_data($where, 'admin');
        // $this->session->set_flashdata('paket', 'Dihapus');
        redirect(base_url() . 'administrator/data_pengguna/admin');
    }

    public function ubah_profil()
    {
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

        $this->m_crud->update_data($where, $data, 'admin'); //memasukan data ke database

        $data_session = [
            'id_admin' => $id_admin,
            'foto' => $foto,
            'nama_admin' => $nama_admin,
            'telepon' => $telepon,
            'username' => $username,
            'passconf' => $password,
            'password' => md5($password)
        ];
        $this->session->set_userdata($data_session);
        redirect($_SERVER['HTTP_REFERER']);
    }
}
