<?php

namespace App\Controllers;
use App\Models\CutiModels;

class Data_karyawan extends BaseController
{// connect ke db (ini syntax OOP)
    protected $cutimodel;
    public function __construct(){

        $this->cutimodel = new CutiModels();
    }
    
    public function index()
    {
        // conncet ke db dengn models
        $cuti = $this->cutimodel ->findAll();
        $data = [
            'title' => 'Data Karyawan',
            'footer' => 'Copyright &copy;Nanda_Novandi2022',
            'footer2' => 'all right reservered.',
            'judul' => 'Data Karyawan',
            'cuti'=> $cuti

        ];
        // // connect ke database dngn cara manual tapa model:
        // $db = \Config\Database::Connect();
        // $cuti = $db-> query ("SELECT * FROM user_detail");

        // foreach($cuti->getResultArray() as $row){
        //     d($row);
        // }


        echo view('Pages/Data_karyawan',$data);

    }

}
