<?php

namespace App\Models;

use CodeIgniter\Model;

class CalonModel extends Model
{
    protected $table      = 'calon';
    protected $primaryKey = 'nkm';
    protected $allowedFields = ['nkm', 'nama', 'semester', 'visi', 'misi', 'foto', 'urutan'];
}
