<?php

namespace App\Models;

use CodeIgniter\Model;

class CutiModels extends Model
{
    // manggil data satu tabel
    protected $table ='user_detail';
    protected $primaryKey = 'id_user_detail';
    protected $useAutoIncrement = true;
    protected $useTimestamp = true;
    protected $allowedFields = ['nip','nama_lengkap','jns_klmn','no_telp','email','alamat','jabatan'];



}
?>