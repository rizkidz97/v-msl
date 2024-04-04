<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Guru extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_crud');
        $this->load->model('m_join');

        if($this->session->userdata('status')!="telah_login"){
            redirect(base_url().'home?alert=belum_login#login');
        }else if($this->session->userdata('level')!="Administrator"){
            redirect(base_url().'home?alert=bukan_admin#login');
        }
    }

    public function index()
    {
        $data = [
            'judul' => "Pengguna"
        ];

        $data['guru'] = $this->m_join->guru_sekolah()->result();
        $this->load->view('template/sidebar',$data);
        $this->load->view('template/header');
        $this->load->view('pengguna/guru/index',$data);
        $this->load->view('template/footer'); 
    }

    public function tambah()
    {
        $data = array(
            'judul' => "Pengguna"
        );

        $data['sekolah'] = $this->m_crud->get_data('id_sekolah','sekolah')->result();
        $this->load->view('template/sidebar',$data);
        $this->load->view('template/header');
        $this->load->view('pengguna/guru/tambah',$data);
        $this->load->view('template/footer'); 
    }

    public function aksi_tambah()
    {
        $nama_guru = $this->input->post('nama_guru');
        $telepon = $this->input->post('telepon');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $id_sekolah = $this->input->post('id_sekolah');
        
        if(isset($_FILES['foto']['name']) && $_FILES['foto']['name'] != ''){
            $config['upload_path'] = './assets/images/foto_profil/';
            $config['allowed_types'] = 'jpeg|jpg|png';
            $config['max_size'] = 1000;
            $config['max_width'] = 1000;
            $config['max_height'] = 1000;

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) //jika gagal upload
            {
                echo "gagal";die;
                $error = array('error' => $this->upload->display_errors()); //tampilkan error
                redirect(base_url().'administrator/data_pengguna/guru', $error);
            }else{
                $file = $this->upload->data();
                $foto = $file['file_name'];
            }
        }else{
            $foto = $this->input->post('foto_default');
        }
        $data = [
            'foto' => $foto,
            'nama_guru' => $nama_guru,
            'telepon' => $telepon,
            'username' => $username,
            'id_sekolah' => $id_sekolah,
            'passconf' => $password,
            'password' => md5($password)
        ];
        $this->m_crud->insert_data($data,'guru'); //memasukan data ke database
        redirect(base_url().'administrator/data_pengguna/guru'); //mengalihkan halaman
    }

    public function ubah($id_guru)
    {
        $where = array(
            'id_guru' => $id_guru,
        );
        $data = array(
            'judul' => "Pengguna"
        );
        
        $data['sekolah'] = $this->m_crud->get_data('id_sekolah','sekolah')->result();
        $data['guru'] = $this->m_crud->edit_data($where,'guru')->result();
        $this->load->view('template/sidebar',$data);
        $this->load->view('template/header');
        $this->load->view('pengguna/guru/ubah',$data);
        $this->load->view('template/footer'); 
    }

    public function aksi_ubah()
    {
        $id_guru = $this->input->post('id_guru');
        $nama_guru = $this->input->post('nama_guru');
        $telepon = $this->input->post('telepon');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $id_sekolah = $this->input->post('id_sekolah');
        
        if(isset($_FILES['foto']['name']) && $_FILES['foto']['name'] != ''){
            $config['upload_path'] = './assets/images/foto_profil/';
            $config['allowed_types'] = 'jpeg|jpg|png';
            $config['max_size'] = 1000;
            $config['max_width'] = 1000;
            $config['max_height'] = 1000;

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) //jika gagal upload
            {
                echo "gagal";die;
                $error = array('error' => $this->upload->display_errors()); //tampilkan error
                redirect(base_url().'administrator/data_pengguna/guru', $error);
            }else{
                $file = $this->upload->data();
                $foto = $file['file_name'];
            }
        }else{
            $foto = $this->input->post('foto_default');
        }

        $where = [
            'id_guru' => $id_guru
        ];

        $data = [
            'foto' => $foto,
            'nama_guru' => $nama_guru,
            'telepon' => $telepon,
            'username' => $username,
            'id_sekolah' => $id_sekolah,
            'passconf' => $password,
            'password' => md5($password)
        ];
        $this->m_crud->update_data($where,$data,'guru'); //memasukan data ke database
        redirect(base_url().'administrator/data_pengguna/guru'); //mengalihkan halaman
    }

    public function hapus($id_guru)
    {
        $where = array(
            'id_guru' => $id_guru
        );
        $this->m_crud->delete_data($where,'guru');
        // $this->session->set_flashdata('paket', 'Dihapus');
        redirect(base_url().'administrator/data_pengguna/guru');
    }
}