<?php

namespace App\Models;

use CodeIgniter\Model;

class PanitiaModel extends Model
{
    protected $table = 'panitia';
    protected $primaryKey = 'id_panitia';
    protected $allowedFields = ['id_panitia', 'nama', 'alamat', 'telp', 'foto'];
}
