<?php

namespace App\Models;

use CodeIgniter\Model;

class PsyPublikasiModel extends Model
{
    protected $table = 'psy__publikasi';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'object';
    protected $useSoftDeletes = false;
    protected $allowedFields = [
        'psy_slug',
        'nama',
        'issuer',
        'tahun',
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}
