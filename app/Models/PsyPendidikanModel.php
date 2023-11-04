<?php

namespace App\Models;

use CodeIgniter\Model;

class PsyPendidikanModel extends Model
{
    protected $table = 'psy__pendidikan';
    protected $primaryKey = 'id';
    protected $useAutoIncrement = true;
    protected $returnType = 'object';
    protected $useSoftDeletes = false;
    protected $allowedFields = [
        'psy_slug',
        'pendidikan',
        'universitas',
        'bidang_peminatan',
        'tahun_lulus',
        'ipk',
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat = 'datetime';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';
}
