<?php
defined('BASEPATH') or exit('No direct script access allowed');
class mahasiswa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_crud');
        $this->load->model('m_join');

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

        $data['mahasiswa'] = $this->m_join->mahasiswa_sekolah()->result();
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/header');
        $this->load->view('pengguna/mahasiswa/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data = array(
            'judul' => "Pengguna"
        );

        $data['sekolah'] = $this->m_crud->get_data('id_sekolah', 'sekolah')->result();
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/header');
        $this->load->view('pengguna/mahasiswa/tambah', $data);
        $this->load->view('template/footer');
    }

    public function aksi_tambah()
    {
        $nama_mahasiswa = $this->input->post('nama_mahasiswa');
        $telepon = $this->input->post('telepon');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $id_sekolah = $this->input->post('id_sekolah');
        $nim = $this->input->post('nim');
        $jurusan = $this->input->post('jurusan');
        $tanggal_lahir = $this->input->post('tanggal_lahir');
        $gender = $this->input->post('gender');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $asal_universitas = $this->input->post('asal_universitas');
        if ($this->input->post('asal_sekolah') != '') {
            $asal_sekolah = $this->input->post('asal_sekolah');
        } else {
            $asal_sekolah = $this->input->post('asal_sekolah_lain');
        }


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
                redirect(base_url() . 'administrator/data_pengguna/mahasiswa', $error);
            } else {
                $file = $this->upload->data();
                $foto = $file['file_name'];
            }
        } else {
            $foto = $this->input->post('foto_default');
        }
        $data = [
            'foto' => $foto,
            'nama_mahasiswa' => $nama_mahasiswa,
            'telepon' => $telepon,
            'username' => $username,
            'id_sekolah' => $id_sekolah,
            'nim' => $nim,
            'jurusan' => $jurusan,
            'tanggal_lahir' => $tanggal_lahir,
            'gender' => $gender,
            'tempat_lahir' => $tempat_lahir,
            'asal_sekolah' => $asal_sekolah,
            'asal_universitas' => $asal_universitas,
            'passconf' => $password,
            'password' => md5($password)
        ];
        // var_dump($data);
        // die;
        $this->m_crud->insert_data($data, 'mahasiswa'); //memasukan data ke database
        redirect(base_url() . 'administrator/data_pengguna/mahasiswa'); //mengalihkan halaman
    }

    public function ubah($id_mahasiswa)
    {
        $where = array(
            'id_mahasiswa' => $id_mahasiswa,
        );
        $data = array(
            'judul' => "Pengguna"
        );

        $data['sekolah'] = $this->m_crud->get_data('id_sekolah', 'sekolah')->result();
        $data['mahasiswa'] = $this->m_crud->edit_data($where, 'mahasiswa')->result();
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/header');
        $this->load->view('pengguna/mahasiswa/ubah', $data);
        $this->load->view('template/footer');
    }

    public function aksi_ubah()
    {

        $id_mahasiswa = $this->input->post('id_mahasiswa');
        $nama_mahasiswa = $this->input->post('nama_mahasiswa');
        $telepon = $this->input->post('telepon');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $id_sekolah = $this->input->post('id_sekolah');
        $nim = $this->input->post('nim');
        $jurusan = $this->input->post('jurusan');
        $tanggal_lahir = $this->input->post('tanggal_lahir');
        $gender = $this->input->post('gender');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $asal_universitas = $this->input->post('asal_universitas');

        if ($this->input->post('asal_sekolah') != '') {
            $asal_sekolah = $this->input->post('asal_sekolah');
        } else {
            $asal_sekolah = $this->input->post('asal_sekolah_lain');
        }

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
                redirect(base_url() . 'administrator/data_pengguna/mahasiswa', $error);
            } else {
                $file = $this->upload->data();
                $foto = $file['file_name'];
            }
        } else {
            $foto = $this->input->post('foto_default');
        }

        $where = [
            'id_mahasiswa' => $id_mahasiswa
        ];

        $data = [
            'foto' => $foto,
            'nama_mahasiswa' => $nama_mahasiswa,
            'telepon' => $telepon,
            'username' => $username,
            'id_sekolah' => $id_sekolah,
            'nim' => $nim,
            'jurusan' => $jurusan,
            'tanggal_lahir' => $tanggal_lahir,
            'gender' => $gender,
            'tempat_lahir' => $tempat_lahir,
            'asal_sekolah' => $asal_sekolah,
            'asal_universitas' => $asal_universitas,
            'passconf' => $password,
            'password' => md5($password)
        ];
        // var_dump($where);
        // die;
        $this->m_crud->update_data($where, $data, 'mahasiswa'); //memasukan data ke database
        redirect(base_url() . 'administrator/data_pengguna/mahasiswa'); //mengalihkan halaman
    }

    public function hapus($id_mahasiswa)
    {
        $where = array(
            'id_mahasiswa' => $id_mahasiswa
        );
        $this->m_crud->delete_data($where, 'mahasiswa');
        // $this->session->set_flashdata('paket', 'Dihapus');
        redirect(base_url() . 'administrator/data_pengguna/mahasiswa');
    }
}
