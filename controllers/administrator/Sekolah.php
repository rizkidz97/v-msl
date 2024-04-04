<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Sekolah extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        $this->load->model('m_crud');

        if($this->session->userdata('status')!="telah_login"){
            redirect(base_url().'home?alert=belum_login#login');
        }else if($this->session->userdata('level')!="Administrator"){
            redirect(base_url().'home?alert=bukan_admin#login');
        }
    }

    public function index()
    {
        $data = [
            'judul' => "Sekolah"
        ];
        $order = 'id_sekolah';

        $data['sekolah'] = $this->m_crud->get_data($order,'sekolah')->result();
        $this->load->view('template/sidebar',$data);
        $this->load->view('template/header');
        $this->load->view('sekolah/index',$data);
        $this->load->view('template/footer'); 
    }

    public function tambah()
    {
        $data = array(
            'judul' => "Sekolah"
        );
        $this->load->view('template/sidebar',$data);
        $this->load->view('template/header');
        $this->load->view('sekolah/tambah',$data);
        $this->load->view('template/footer'); 
    }

    public function aksi_tambah()
    {
        $nama_sekolah = $this->input->post('nama_sekolah');
        $kelas = $this->input->post('kelas');
        $pemisah = explode(',', $kelas);
        $no = 0;
        foreach($pemisah as $p){
            if(isset($_FILES['foto']['name']) && $_FILES['foto']['name'] != ''){
            $config['upload_path'] = './assets/images/upload_logo_sekolah/';
            $config['allowed_types'] = 'jpeg|jpg|png';
            $config['max_size'] = 1000;
            $config['max_width'] = 1000;
            $config['max_height'] = 1000;

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) //jika gagal upload
            {
                echo "gagal";die;
                $error = array('error' => $this->upload->display_errors()); //tampilkan error
                redirect(base_url().'administrator/data_pengguna/admin', $error);
            }else{
                $file = $this->upload->data();
                $foto = $file['file_name'];
            }
            }else{
                $foto = $this->input->post('foto_default');
            }
            $data = [
                'foto' => $foto,
                'nama_sekolah' => $nama_sekolah,
                'kelas' => $p
            ];

            $this->m_crud->insert_data($data,'sekolah');
            $no++;
            redirect(base_url().'administrator/sekolah');
        }
    }

    public function ubah($id_sekolah)
    {
        $where = array(
            'id_sekolah' => $id_sekolah,
        );
        $data = array(
            'judul' => "Sekolah"
        );
        
        $data['sekolah'] = $this->m_crud->edit_data($where,'sekolah')->result();
        $this->load->view('template/sidebar',$data);
        $this->load->view('template/header');
        $this->load->view('sekolah/ubah',$data);
        $this->load->view('template/footer'); 
    }

    public function aksi_ubah()
    {
        $id_sekolah = $this->input->post('id_sekolah');
        $nama_sekolah = $this->input->post('nama_sekolah');
        $kelas = $this->input->post('kelas');
        $pemisah = explode(',', $kelas);
        $no = 0;
        foreach($pemisah as $p){
            if(isset($_FILES['foto']['name']) && $_FILES['foto']['name'] != ''){
            $config['upload_path'] = './assets/images/upload_logo_sekolah/';
            $config['allowed_types'] = 'jpeg|jpg|png';
            $config['max_size'] = 1000;
            $config['max_width'] = 1000;
            $config['max_height'] = 1000;

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('foto')) //jika gagal upload
            {
                echo "gagal";die;
                $error = array('error' => $this->upload->display_errors()); //tampilkan error
                redirect(base_url().'administrator/data_pengguna/admin', $error);
            }else{
                $file = $this->upload->data();
                $foto = $file['file_name'];
            }
            }else{
                $foto = $this->input->post('foto_default');
            }
            $where = [
                'id_sekolah' => $id_sekolah
            ];

            $data = [
                'foto' => $foto,
                'nama_sekolah' => $nama_sekolah,
                'kelas' => $p
            ];

            $this->m_crud->update_data($where,$data,'sekolah');
            $no++;
            redirect(base_url().'administrator/sekolah');
        }
    }

    public function hapus($id_sekolah)
    {
        $where = array(
            'id_sekolah' => $id_sekolah
        );
        $this->m_crud->delete_data($where,'sekolah');
        // $this->session->set_flashdata('paket', 'Dihapus');
        redirect(base_url().'administrator/sekolah');
    }
}