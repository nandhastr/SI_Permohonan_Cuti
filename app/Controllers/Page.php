<?php

namespace App\Controllers;



class Page extends BaseController
{
    
    public function index()
    {
        $data = [
            'title' => 'WEB | Sistem Permohonan Cuti',
            'footer' => 'Copyright &copy;Nanda_Novandi2022',
            'footer2' => 'all right reservered.',
            'judul' => 'Admin'

        ];
        echo view('Pages/Dashboard',$data);

    }
    public function Form_cuti()
    {
        $data = [
            'title' => 'Form Cuti',
            'footer' => 'Copyright &copy;Nanda_Novandi2022',
            'footer2' => 'all right reservered.',
            'judul' => 'Form'

        ];
        echo view('Pages/Form_cuti',$data);

    }
    public function Laporan()
    {
        $data = [
            'title' => 'Laporan',
            'footer' => 'Copyright &copy;Nanda_Novandi2022',
            'footer2' => 'all right reservered.',
            'judul' => 'Laporan'

        ];
        echo view('Pages/Laporan',$data);

    }

    public function TambahData(){
        $data = [
            'title' => 'Tambah Data Karyawan',
            'footer' => 'Copyright &copy;Nanda_Novandi2022',
            'footer2' => 'all right reservered.',
            'judul' => 'Tambah Data'

        ];
        echo view('Pages/Tambah_data_karyawan',$data);


    }

    public function register(){
        $data = [
            'title' => 'Register',
            'footer' => 'Copyright &copy;Nanda_Novandi2022',
            'footer2' => 'all right reservered.',
            'judul' => 'Register'

        ];
        echo view('register',$data);
    }

    // proses input data ke db 
    public function save(){
        // menangkap data input dari form  
    //   dd(  $this->request->getVar());

    // menyimpan data hasil input ke db
   
    $this->cutimodel->save(
        [
            'nip' =>$this->request->getVar('nip'),
            'nama_lengkap' =>$this->request->getVar('nama'),
            'jns_klmn' =>$this->request->getVar('jenis_kelamin'),
            'no_telp' =>$this->request->getVar('tlp'),
            'email' =>$this->request->getVar('email'),
            'alamat' =>$this->request->getVar('alamat'),
            'jabatan' =>$this->request->getVar('jabatan')
           
        ]
        );

        session()->getFlashdata('pesan','Data berhasil ditambahkan');


        return redirect()->to('/Data_karyawan');

    }



    
}