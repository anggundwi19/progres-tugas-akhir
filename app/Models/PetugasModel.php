<?php

namespace App\Models;

use CodeIgniter\Model;

class PetugasModel extends Model
{
    protected $table = 'petugas';
    protected $primaryKey = 'id';
    protected $allowedFields = ['id_user', 'nama_lengkap', 'status', 'alamat', 'no_hp'];
}