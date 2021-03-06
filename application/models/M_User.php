<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_User extends CI_Model {

   //Membuat var global untuk tabel 
   private $_tableSiswa = 'siswa';
   private $_tablePetugas = 'petugas';
   private $_tableSpp = 'spp'; 

   public function login()
   {
       //Membuat var $post untuk mempersingkat penulisan
       $post = $this->input->post();

       //CARI NIS sesuai yang User input
       $this->db->where('nis', $post['username']);
       $siswa = $this->db->get($this->_tableSiswa)->row_array();
    
       //CARI Username sesuai yang User input yang Levelnya "ADMIN"
       $this->db->where('username', $post['username']);
       $this->db->where('level', 'admin');
       $admin = $this->db->get($this->_tablePetugas)->row_array();

        //CARI Username sesuai yang User input yang Levelnya "PETUGAS"
       $this->db->where('username', $post['username']);
       $this->db->where('level', 'petugas');
       $petugas = $this->db->get($this->_tablePetugas)->row_array();

       //Masukan kedalam array $who agar nama var nya sama
       $who = [
           $siswa, $admin, $petugas
       ];
       
       //Ambil array yang bernilai NULL lalu masukan kedalam var baru
       $result = array_search(!NULL, $who);
       $user = $who[$result];

       //Jika USERnya ada CEK ROLE
       if($user) {
           if ($user['role'] == 1 || $user['role'] == 2)
           {
               //CEK PW
                if(password_verify($post['password'], $user['password'])) 
                {
                    //SIMPAN SESSION KE DALAM $data
                    $data = [
                        'username' => $user['username'],
                        'nama' => $user['nama'],
                        'level' => $user['level'],
                        'role' => $user['role']
                    ];
                    $this->session->set_userdata($data);

                    if ($user['level'] == "admin")
                    {
                        //MASUK Ke dashboard masing masing ROLE
                        redirect('administrator');
                    } else {
                        redirect('petugas');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Kata sandi salah!</div>');
                    redirect('auth');
                }
           } else {
            $data = [
                'username' => $user['nisn'],
                'username' => $user['nis'],
                'nama' => $user['nama'],
                'role' => $user['role']
            ];
            $this->session->set_userdata($data);
              redirect('siswa');
           }
       } else {
        $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Data tidak ditemukan!</div>');
        redirect('auth');
       }
   }

   public function dataSiswa()
   {
       $this->db->select('*');
       $this->db->from($this->_tableSiswa);
       $this->db->join('kelas','kelas.id_kelas = siswa.id_kelas');      
       return $this->db->get()->result_array();
   }

   public function getSiswaByNisn($id)
   {
       $this->db->where('nisn', $id);
       return $this->db->get($this->_tableSiswa)->row_array();
   }

   public function tambahSiswa()
   {
       $post = $this->input->post();
       $data = [
           'nisn' => $post['nisn'],
           'nis' => $post['nis'],
           'nama' => $post['nama'],
           'id_kelas' => $post['id_kelas'],
           'alamat' => $post['alamat'],
           'no_telp' => $post['telp'],
           'role' => 0           
       ];

       return $this->db->insert($this->_tableSiswa, $data);
   }

   public function editSiswa($id)
   {
       $post = $this->input->post();
       $data = [
           'nisn' => $post['nisn'],
           'nis' => $post['nis'],
           'nama' => $post['nama'],
           'id_kelas' => $post['id_kelas'],
           'alamat' => $post['alamat'],
           'no_telp' => $post['telp'],
           'id_spp' => 1,
           'role' => 0           
       ];

        $this->db->where('nisn', $id);
       return $this->db->update($this->_tableSiswa, $data);
   }

   public function dataPetugas()
   {  
       return $this->db->get($this->_tablePetugas)->result_array();
   }

   public function getPetugasById($id)
   {
       $this->db->where('id_petugas', $id);
       return $this->db->get($this->_tablePetugas)->row_array();
   }

   public function tambahPetugas()
   {
       $post = $this->input->post();
       $data = [
           'username' => $post['username'],
           'password' => password_hash($post['password'], PASSWORD_DEFAULT),
           'nama' => $post['nama'],
           'level' => $post['level'],
           'role' => $post['role']   
       ];

       return $this->db->insert($this->_tablePetugas, $data);
   }

   public function editPetugas($id)
   {
       $post = $this->input->post();
       $data = [
           'username' => $post['username'],
           'nama' => $post['nama'],
           'level' => $post['level'],
           'role' => $post['role']   
       ];

       $this->db->where('id_petugas', $id);
       return $this->db->update($this->_tablePetugas, $data);
   }

   public function dataSpp()
   {
       return $this->db->get($this->_tableSpp)->result_array();

   }

   public function getSppById($id)
   {
        $this->db->where('id_spp', $id);
        // $this->db->where('nis', $this->session->userdata('username'));
        return $this->db->get($this->_tableSpp)->row_array();
   }

   public function getPembayaran($id)
   {
       $this->db->where('id_spp', $id);
       return $this->db->get('pembayaran')->row_array();
   }

   public function getPembayaranById($id)
   {
       $this->db->where('id_pembayaran', $id);
       return $this->db->get('pembayaran')->row_array();
   } 

   public function dataPembayaranTunggu()
   {
       $this->db->where('status', 'Tunggu Konfirmasi');
       return $this->db->get('pembayaran')->result_array();
   }

   public function dataPembayaranAcc()
   {
       $this->db->where('status', 'Dikonfirmasi');
       return $this->db->get('pembayaran')->result_array();
   }


   public function tambahSpp()
   {
       $post = $this->input->post();
       $spp = [
            'tahun' => $post['tahun'],
            'bulan' => $post['bulan'],
            'nominal' => $post['nominal']
       ];

       return $this->db->insert($this->_tableSpp, $spp);
   }

   public function editSpp($id)
   {
       $post = $this->input->post();
       $spp = [
            'tahun' => $post['tahun'],
            'bulan' => $post['bulan'],
            'nominal' => $post['nominal']
       ];
       
       $this->db->where('id_spp', $id);
       return $this->db->update($this->_tableSpp, $spp);

   }

   public function uploadGambar()
   {
    $config['upload_path']          = './assets/img/';
    $config['allowed_types']        = 'gif|jpg|png';
    $config['file_name']            = uniqid();
    $config['overwrite']			= true;
    // $config['max_width']            = 1024;
    // $config['max_height']           = 768;

    $this->load->library('upload', $config);

    if ($this->upload->do_upload('gambar')) {
        return $this->upload->data("file_name");
    } else {
        echo $this->upload->display_errors();
    }

   }

   public function tambahPembayaran()
   {
       $post = $this->input->post();

       $data = [
           'nisn' => $this->session->userdata('username'),
           'nama' => $this->session->userdata('nama'),
           'tgl_bayar' => $post['tgl_bayar'],
           'bulan_dibayar' => $post['bulan_dibayar'],
           'tahun_dibayar' => $post['tahun_dibayar'],
           'id_spp' => $post['id_spp'],
           'jumlah_bayar' => $post['nominal'],
           'bukti_pembayaran' => $this->uploadGambar(),
           'status' => "Tunggu Konfirmasi"
       ];

       return $this->db->insert('pembayaran', $data);
   }

   public function pembayaran()
   {
       return $this->db->get('pembayaran')->result_array();
   }

   public function pembayaranByNis()
   {
       $this->db->where('nisn', $this->session->userdata('username'));
       return $this->db->get('pembayaran')->result_array();
   }

   public function accPembayaran($id)
   {
       $status = "Dikonfirmasi";
       $query = "UPDATE `pembayaran` SET `status` = '$status' WHERE `id_pembayaran` = '$id'";
       return $this->db->query($query);

   }

}