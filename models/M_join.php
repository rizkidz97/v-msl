<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_join extends CI_Model {

    public function guru_sekolah()
	{
        $this->db->order_by('id_guru', 'DESC');
        return $this->db->from('guru')
			->join('sekolah', 'sekolah.id_sekolah = guru.id_sekolah')
            ->get();
	}
    
    public function mahasiswa_sekolah()
	{
        $this->db->order_by('id_mahasiswa', 'DESC');
        return $this->db->from('mahasiswa')
			->join('sekolah', 'sekolah.id_sekolah = mahasiswa.id_sekolah')
            ->get();
	}
    
}