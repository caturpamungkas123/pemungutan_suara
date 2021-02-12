<?php

namespace App\Models;

use CodeIgniter\Model;

class PemilihModel extends Model
{
    protected $table      = 'pemilih';
    protected $primaryKey = 'nkm';
    protected $allowedFields = ['nkm', 'nama', 'alamat', 'telepon', 'semester', 'foto',];
}
